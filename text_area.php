<?php
/*********************************
* Field Type: Text Area
**********************************
*
* This type of field allows a user to import elements and/or static text to a text area field.
*
* add_field arguments: $field_slug, $field_name, $field_type, $enum_values = null, $tooltip = "", $is_html = true, $default_text = ''
*/

// Usage:

$my_addon->add_field( 'field_name', 'Field Name', 'textarea', null, 'Tooltip', false, 'Default Text' );

/** Example 1
*
* "Description" Field
* Imports text data into a post meta field named "myaddon_full_description"
*/

include "rapid-addon.php";

$my_addon = new RapidAddon( 'My First Add-On', 'my_first_addon' );
$my_addon->add_field( 'myaddon_full_description', 'Full Description', 'textarea', null, 'Enter the full description', false, 'No description.' );