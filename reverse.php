<?php
error_reporting(0);

echo "Input your domains : ";
$domain = trim(fgets(STDIN));
echo "Searching for : $domain \n";

echo "Filename for save : ";
$text = trim(fgets(STDIN));

if(!empty($domain) || !empty($text)) {
$hi = file_get_contents('http://api.hackertarget.com/reverseiplookup/?q='. $domain .'');


echo file_put_contents("$text","$hi");
echo $hi;


echo ("\nYour file name is : $text\n");

}
    else {
echo "Failure name file";
}
?>

