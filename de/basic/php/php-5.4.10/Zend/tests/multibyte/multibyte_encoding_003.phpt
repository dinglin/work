--TEST--
Zend Multibyte and UTF-16 BOM
--SKIPIF--
<?php
if (!in_array("zend.detect_unicode", array_keys(ini_get_all()))) {
  die("skip Requires configure --enable-zend-multibyte option");
}
if (!extension_loaded("mbstring")) {
  die("skip Requires mbstring extension");
}
?>
--INI--
zend.multibyte=1
mbstring.internal_encoding=iso-8859-1
--FILE--
��< ? p h p 
 p r i n t   " H e l l o   W o r l d \ n " ; 
 ? > 
 = = = D O N E = = = 
 
--EXPECT--
Hello World
===DONE=== 
