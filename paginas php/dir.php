<?php

	$dir = ".";
	if(isset($_GET['dir']))
		$dir = $dir."/".$_GET['dir'];
	if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: .".$file."<br />";
        }
        closedir($dh);
    }
}

?>