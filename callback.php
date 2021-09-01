<?php
function my_callback($item) {
  echo $item."----".strlen($item)."<br>";
  $result = '';
  if(strlen($item) >= 6) {
    $result = "Pass";
  } else {
     $result =  "Fail";
  }

  return $result;
}

$strings = ["apple", "orange", "banana", "coconut", "deepak"];
$lengths = array_map("my_callback", $strings);


echo "<pre>";
print_r($lengths);
echo "</pre>";
?>