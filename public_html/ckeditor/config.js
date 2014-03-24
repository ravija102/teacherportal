/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	config.contentsCss = 'fonts.css';
//the next line add the new font to the combobox in CKEditor
config.font_names = 'Gujrati-Saral-1;' + config.font_names;
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};

