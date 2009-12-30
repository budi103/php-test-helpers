--TEST--
test_helpers_set_new_overload() with a static method
--SKIPIF--
<?php 
if (!extension_loaded('test_helpers')) die('skip test_helpers extension not loaded');
?>
--FILE--
<?php
class Foo {}
class Bar {}

class CB {
    static function callback($className) {
        return 'Foo';
    }
}

var_dump(test_helpers_set_new_overload(array('CB', 'callback')));

var_dump(get_class(new Bar));
--EXPECT--
bool(true)
string(3) "Foo"
