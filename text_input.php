<?php
/*********************************
* Field Type: Text Input
**********************************
*
* This type of field allows a user to import elements and/or static text to a field.
*
* add_field arguments: $field_slug, $field_name, $field_type, $enum_values = null, $tooltip = "", $is_html = true, $default_text = ''
*/

/** Example 1
*
* "First Name" Field
* Imports text data into a post meta field named "myaddon_first_name"
*/

include "rapid-addon.php";

$my_addon = new RapidAddon( 'My First Add-On', 'my_first_addon' );
$my_addon->add_field( 'myaddon_first_name', 'First Name', 'text' );

/** Example 2
*
* "Sale Text" field with default text
* 
* You can add default text within an input field using the 4th argument.$_COOKIE
* In this example, "FOR SALE" will appear by default in the import field.
*/

include "rapid-addon.php";

$my_addon = new RapidAddon( 'My First Add-On', 'my_first_addon' );
$my_addon->add_field( 'myaddon_sale_text', 'Sale Text', 'text', null, 'Tool Tip Text', false, 'FOR SALE' );