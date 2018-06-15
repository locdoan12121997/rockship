<?php

if( class_exists('WPBakeryVisualComposerAbstract') ){
	
	$path =  get_template_directory() . '/framework/visual-composer/';
	$files = glob($path . '/addon/*.php');
	
	foreach( $files as $file )
		if( __FILE__ != basename($file) )
			include_once $file;	
}