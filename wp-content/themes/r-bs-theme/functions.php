<?php 
// PATH_TO_CHILD_THEME defined in wp-config.php
define('child_template_directory', PATH_TO_CHILD_THEME );

function p($obj){
	echo "<pre>".print_r($obj,1)."</pre>";
}

 ?>