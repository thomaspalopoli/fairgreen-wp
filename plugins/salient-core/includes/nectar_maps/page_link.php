<?php 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;

return array(
	"name" => esc_html__("Menu Link", "salient-core"),
	"base" => "page_link",
	"allowed_container_element" => 'vc_row',
	"is_container" => true,
	"content_element" => false,
	"params" => array(
		array(
			"admin_label" => false,
			"type" => "textfield",
			"heading" => esc_html__("Link Text", "salient-core"),
			"param_name" => "title",
			"description" => esc_html__("Enter the text that will be displayed for your link", "salient-core")
		),
		array(
			"admin_label" => true,
			"type" => "textfield",
			"heading" => esc_html__("Link URL", "salient-core"),
			"param_name" => "link_url",
			"description" => esc_html__("Enter the URL that will be used for your link", "salient-core")
		),
		array(
			"type" => "checkbox",
			"class" => "",
			'edit_field_class' => 'vc_col-xs-12 salient-fancy-checkbox',
			"heading" => "Open Link In New Tab",
			"value" => array("Yes, please" => "true" ),
			"param_name" => "link_new_tab",
			"description" => ""
		),
		array(
			"type" => "tab_id",
			"heading" => esc_html__("Page Link ID", "salient-core"),
			"param_name" => "id"
		)
	),
	'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
);

?>