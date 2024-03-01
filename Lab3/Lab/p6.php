<?php

$fruits = ["e1"=>'banna', "e2"=>"apple", "e3"=>"lichi"]; $elementToSearch = "apple";

$found = false;

foreach($fruits as $f) {

if($f == $elementToSearch) {

$found = true;

break;

}

}

if ($found) {

echo "found";

} else {

echo "element not found";
}
?>