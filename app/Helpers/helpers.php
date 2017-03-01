<?php 

function minify_html($dato){ 
	return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'', $dato));
} 
 
?>