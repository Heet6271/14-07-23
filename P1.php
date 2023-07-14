<?php
abstract class class1 {
abstract protected function prefixName($name);
}
class class2 extends class1 {
    public function prefixName($name) {
        if ($name == "Moon") {
        $prefix = "Mr.";
        } elseif ($name == "Heet") {
        $prefix = "Mr.";
        } else {
        $prefix = "";
        }
        return "{$prefix} {$name}";
    }
 }
$class = new class2;
 echo $class->prefixName("Heet");
 echo "<br>";
 echo $class->prefixName("
 Moon");
?>