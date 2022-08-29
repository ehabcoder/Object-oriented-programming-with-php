<?php
  class Foo {
    public static function aStaticMethod() {
      $var = 'this';
      var_dump($var);
    }

    public function aNonStaticMethod() {
      var_dump($this);
    }
}

Foo::aStaticMethod();
$object = new foo();
$object-> aNonStaticMethod();
?>
