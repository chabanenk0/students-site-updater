<?php
$dir=$_REQUEST['path'];
echo ("cd $dir");
system("cd $dir && git pull");
?>