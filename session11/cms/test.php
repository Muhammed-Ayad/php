<?php
$a = null;
// True because $a is set
if (isset($a)) {
  echo "يوجد قيمة.<br>";
}

$b = 0;
// False because $b is NULL
if (isset($b)) {
  echo "لا يوجد قيمة.";
}
?>