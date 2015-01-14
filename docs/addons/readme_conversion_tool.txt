Conversion Tool for oscommerce

Version 1.0


What is it?
- simple integrated tool for migration and update do in data tables


How to Install?
- make a backup your store
- upload this addon
- log in admin
- install conversion modules in Admin->Modules->Conversion tools

How to use?
- the conversion addon follow the database_tables concept with text(csv) file extention. Only 
the conversion files need for edit to define logic. The csv files are used as conversion templates.

Example:
  n=>N

 means replace "n" to "N"


IMPORTANT: only unix file format enabled
CRLR as windows line end is not allowed in csv files
Templated files are found in catalog\admin\includes\modules\character_convert\templates\

- Make database backup first
- Go Admin->Tools->Conversion Tools
- Table Select one or more table with checkbox
- Select requested conversion module from below accordions and use checkbox
- Select Character Conversion at the bottom drop down field (default)
- Check if you want to read only queries
- Run


Included templates:
- hungarian conversions
- special conversions
- migration template
- html conversions or validations template
