const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.min.css',
	'node_modules/font-awesome/css/font-awesome.min.css',
	'node_modules/select2/dist/css/select2.min.css',
	//'node_modules/bootstrap3-wysihtml5-npm/dist/bootstrap3-wysihtml5.min.css',
	'node_modules/highcharts/css/highcharts.css',
	'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js',
	'resources/css/admin_style.css',
	'resources/css/admin_media.css',
	], 'public/css/admin.css');

mix.scripts([
	'node_modules/jquery/dist/jquery.min.js',
	'node_modules/bootstrap/dist/js/bootstrap.min.js',
	'node_modules/select2/dist/js/select2.min.js',
	//'node_modules/bootstrap3-wysihtml5-npm/dist/bootstrap3-wysihtml5.min.js',
	'node_modules/highcharts/js/highcharts.js',
	'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js',
	'node_modules/plupload/js/plupload.full.min.js',
	'resources/js/setting.js',
	'resources/js/backend.js',
	], 'public/js/admin.js');


mix.copy('node_modules/font-awesome/fonts/', 'public/fonts');