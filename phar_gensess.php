<?php
class TestObject
{
}
@unlink("phar.tar.phar");
$phar = new Phar("phar.tar.phar");
$phar->startBuffering();
$phar->addFromString("test|s:5107:\"","test");
$phar->setStub("<?php __HALT_COMPILER(); ?>");
$o = new TestObject();
$phar->setMetadata($o);
$phar->stopBuffering();

?>
