<?php
/**
 * @package Internals
 */

function git_formshortcode( $atts)	
{
	extract( shortcode_atts( array(
				"id" => 0
			), $atts 
		) 
	);
	git_form($id);
}

function git_mapshortcode( $atts)	
{
	extract( shortcode_atts( array(
				"id" => 0
			), $atts 
		) 
	);
	git_map($id);		
}

add_shortcode( "git_form", "git_formshortcode" );
add_shortcode( "git_map", "git_mapshortcode" );
?>