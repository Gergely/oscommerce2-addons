<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2013 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  function tep_dt_get_tables() {
    $result = array();

    $tables_query = tep_db_query('show table status');
    while ( $tables = tep_db_fetch_array($tables_query) ) {
      $result[] = $tables['Name'];
    }

    return $result;
  }

  $mysql_charsets = array(array('id' => 'auto', 'text' => ACTION_UTF8_CONVERSION_FROM_AUTODETECT));

  $charsets_query = tep_db_query("show character set");
  while ( $charsets = tep_db_fetch_array($charsets_query) ) {
    $mysql_charsets[] = array('id' => $charsets['Charset'], 'text' => sprintf(ACTION_UTF8_CONVERSION_FROM, $charsets['Charset']));
  }

  if ( defined('MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED') && tep_not_null(MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED) ) {
    $accm_array = explode(';', MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED);

    for ( $i=0, $n=sizeof($accm_array); $i<$n; $i++ ) {
      $accm = $accm_array[$i];

      $class = substr($accm, 0, strrpos($accm, '.'));

      if ( !class_exists($class) ) {
        include(DIR_WS_LANGUAGES . $language . '/modules/character_convert/' . $accm);
        include(DIR_WS_MODULES . 'character_convert/' . $class . '.php');
      }

      $acc = new $class();

      if ( $acc->isEnabled() ) {
        $col = 0;
        foreach ( $acc->getOutput() as $key => $value ) {
          $character_tables[$acc->getCode()][$col] = array($key,
                                                           '=&gt;',
                                                           $value,
                                                           tep_draw_checkbox_field('module[' . $acc->getCode() . '][' . $col . ']', 0));
          $col++;
        }

        $character_modules[$acc->getCode()] = array('title' => $acc->getTitle(),
                                                    'instructions' => $acc->getInstructions());
      }
    }
  }


  $action = null;
  $actions = array(array('id' => 'character_conversion',
                         'text' => ACTION_CHARACTER_CONVERSION));

  if ( isset($_POST['action']) ) {
    if ( in_array($_POST['action'], array('character_conversion')) ) {
      if ( isset($_POST['id']) && is_array($_POST['id']) && !empty($_POST['id']) ) {
        $tables = tep_dt_get_tables();

        foreach ( $_POST['id'] as $key => $value ) {
          if ( !in_array($value, $tables) ) {
            unset($_POST['id'][$key]);
          }
        }

        if ( !empty($_POST['id']) ) {
          $action = $_POST['action'];
        }
      }
    }
  }

  switch ( $action ) {
    case 'character_conversion':

      if ( !isset($_POST['module']) ) {
        tep_redirect(tep_href_link('conversion_tools.php'));
      }

      tep_set_time_limit(0);

      if ( isset($_POST['dryrun']) ) {
        $table_headers = array(TABLE_HEADING_QUERIES);
      } else {
        $table_headers = array(TABLE_HEADING_TABLE,
                               TABLE_HEADING_MSG,
                               tep_draw_checkbox_field('masterblaster'));
      }

      $table_data = array();

      foreach ( $_POST['id'] as $table ) {
        $result = 'OK';

        $queries = array();

        $cols_query = tep_db_query("show full columns from " . $table);
        while ( $cols = tep_db_fetch_array($cols_query) ) {
          if ( !empty($cols['Collation']) ) {
            foreach ( $_POST['module'] as $module => $conversion_array ) {
              foreach ( $conversion_array as $letters => $letters_to ) {
                if ( isset($character_tables[$module][$letters][0]) && isset($character_tables[$module][$letters][2]) ) {

                  $key = tep_db_input($character_tables[$module][$letters][0]);
                  $value = tep_db_input($character_tables[$module][$letters][2]);

                  $queries[] = "update " . $table . " set " . $cols['Field'] . " = replace(" . $cols['Field'] . " , '" . $key . "', '" . $value . "') where " . $cols['Field'] . " like '%" . $key . "%'";
                }
              }
            }
          }
        }

        if ( isset($_POST['dryrun']) ) {

          foreach ( $queries as $q ) {
            $table_data[] = array($q);
          }
        } else {
// mysqli_query() is directly called as tep_db_query() dies when an error occurs
          foreach ( $queries as $q ) {
            if ( !mysqli_query($db_link, $q) ) {
              $result = mysqli_error($db_link);
              break;
            }
          }
        }

        if ( !isset($_POST['dryrun']) ) {
          $table_data[] = array(tep_output_string_protected($table),
                                tep_output_string_protected($result),
                                tep_draw_checkbox_field('id[]', $table, true));
        }
      }

      break;

    default:
      $table_headers = array(TABLE_HEADING_TABLE,
                             TABLE_HEADING_ROWS,
                             TABLE_HEADING_SIZE,
                             TABLE_HEADING_ENGINE,
                             TABLE_HEADING_COLLATION,
                             tep_draw_checkbox_field('masterblaster'));

      $table_data = array();

      $sql_query = tep_db_query('show table status');
      while ( $sql = tep_db_fetch_array($sql_query) ) {
        $table_data[] = array(tep_output_string_protected($sql['Name']),
                              tep_output_string_protected($sql['Rows']),
                              round(($sql['Data_length'] + $sql['Index_length']) / 1024 / 1024, 2) . 'M',
                              tep_output_string_protected($sql['Engine']),
                              tep_output_string_protected($sql['Collation']),
                              tep_draw_checkbox_field('id[]', $sql['Name']));
      }
  }

  require(DIR_WS_INCLUDES . 'template_top.php');
?>

<?php
  if ( isset($_POST['dryrun']) ) {
    echo '<div style="float: right;">' . tep_draw_button(IMAGE_BACK, 'triangle-1-w', tep_href_link('conversion_tools.php')) . '</div>';
  }
?>

<h1 class="pageHeading"><?php echo HEADING_TITLE; ?></h1>

<?php
  echo tep_draw_form('sql', 'conversion_tools.php');
?>

<div id="convertaccordion">

<h3><?php echo ACCORDION_TABLE_TITLE; ?></h3>
<div>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="dataTableHeadingRow">

<?php
  foreach ( $table_headers as $th ) {
    echo '    <td class="dataTableHeadingContent">' . $th . '</td>' . "\n";
  }
?>
  </tr>

<?php
  foreach ( $table_data as $td ) {
    echo '  <tr class="dataTableRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)">' . "\n";

    foreach ( $td as $data ) {
      echo '    <td class="dataTableContent">' . $data . '</td>' . "\n";
    }

    echo '  </tr>' . "\n";
  }
?>

</table>
</div>
<?php
  if ( !isset($_POST['dryrun']) ) {
    if ( defined('MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED') && tep_not_null(MODULE_ADMIN_CHARACTER_CONVERT_INSTALLED) ) {
      foreach ( $character_tables as $module_name => $char_module ) {
        echo '<h3>' . $character_modules[$module_name]['title'] . '</h3>' . "\n";
        echo '<div>' . "\n";
        echo '<div>' . $character_modules[$module_name]['instructions'] . '</div>' . "\n";
        echo '<br />';
        echo '<table border="0" width="100%" cellspacing="0" cellpadding="2">' . "\n";
        echo '  <tr class="dataTableHeadingRow"><td class="dataTableHeadingContent">' . TABLE_HEADER_CONVERT_FROM . '</td><td>&nbsp;</td><td class="dataTableHeadingContent">' . TABLE_HEADER_CONVERT_TO . '</td><td   class="dataTableHeadingContent">&nbsp;</td></tr>' . "\n";

        foreach ( $char_module as $key => $tablerow ) {
          echo ' <tr class="dataTableRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)">' . "\n";

          for ( $i=0; $i<sizeof($tablerow); $i++ ) {
            echo '    <td class="dataTableContent">' . ( ($i/2) == floor($i/2) ? tep_output_string_protected($tablerow[$i]) : $tablerow[$i] ) . '</td>' . "\n";
          }

          echo '  </tr>' . "\n";
        }

        echo '</table>' . "\n";
        echo '</div>' . "\n";
      }
    }
  }
?>
</div>
<script type="text/javascript">
$( "#convertaccordion" ).accordion({ heightStyle: "content" });
</script>
<?php
  if ( !isset($_POST['dryrun']) ) {
?>

<div class="main" style="text-align: right;">
  <?php echo '<span class="runCharacterConvert" style="display: none;">' . sprintf(ACTION_UTF8_DRY_RUN, tep_draw_checkbox_field('dryrun')) . '</span>' . '<span class="runUtf8" style="display: none;">' . sprintf(ACTION_UTF8_DRY_RUN, tep_draw_checkbox_field('dryrun')) . '</span>' . tep_draw_pull_down_menu('action', $actions, '', 'id="sqlActionsMenu"') . '<span class="runUtf8" style="display: none;">&nbsp;' . tep_draw_pull_down_menu('from_charset', $mysql_charsets) . '</span>&nbsp;' . tep_draw_button(BUTTON_ACTION_GO); ?>
</div>

<?php
  }
?>

</form>

<script type="text/javascript">
$(function() {
  if ( $('form[name="sql"] input[type="checkbox"][name="masterblaster"]').length > 0 ) {
    $('form[name="sql"] input[type="checkbox"][name="masterblaster"]').click(function() {
      $('form[name="sql"] input[type="checkbox"][name="id[]"]').prop('checked', $('form[name="sql"] input[type="checkbox"][name="masterblaster"]').prop('checked'));
    });
  }

  if ( $('#sqlActionsMenu').val() == 'character_conversion' ) {
    $('.runCharacterConvert').show();
  }

  $('#sqlActionsMenu').change(function() {
    var selected = $(this).val();

    if ( selected == 'utf8' ) {
      $('.runUtf8').show();
    } else {
      $('.runUtf8').hide();
    }

    if ( selected == 'character_conversion' ) {
      $('.runCharacterConvert').show();
    } else {
      $('.runCharacterConvert').hide();
    }
  });
});
</script>

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
