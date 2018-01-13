<?php

// Setup LESS Compiler
error_reporting(0);
header("Content-type: text/css; charset: UTF-8");
header( 'Cache-Control: max-age=2628000' );
chdir('Libraries/lessphp');
require("lessc.inc.php");
$less = new lessc;
chdir('../../LESS/');

$LESSFiles = scandir('../LESS');
$LESSFiles = array_diff($LESSFiles, array('.', '..', '.DS_Store', 'lessCache.cache', 'lessHash.cache'));
$LESSFiles = array_values($LESSFiles);
foreach($LESSFiles as $LESSFile){
	$TotalMD5 .= md5_file('../LESS/'.$LESSFile.'');
}
if($TotalMD5!=file_get_contents('./segments/lessHash.cache')){
	// There has been a change in the Working copy. Update the LESS
	$CompiledLess = $less->compileFile('Build.less');
	$CompiledLess = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $CompiledLess );
	$CompiledLess = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $CompiledLess );		
	file_put_contents('../LESS/lessHash.cache', $TotalMD5);
	file_put_contents('../LESS/lessCache.cache', $CompiledLess);
}else{
	// Use the cache
	$CompiledLess = file_get_contents('../LESS/lessCache.cache');
}

// Output the less
echo $CompiledLess;