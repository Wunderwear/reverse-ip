<?php
error_reporting(0);

//1. untuk menginput domain
echo "Input your domains : ";
$domain = trim(fgets(STDIN));
echo "Searching for : $domain \n";

echo "Filename for save : ";
$text = trim(fgets(STDIN));

if(!empty($domain) || !empty($text)) {
$hi = file_get_contents('http://api.hackertarget.com/reverseiplookup/?q='. $domain .'');

//2.Proses get data dari cURL
echo file_put_contents("$text","$hi");
echo $hi;

//3. menampilkan nama file yang disave saat pertama diinput
echo ("\nYour file name is : $text\n");

//4. else jika salah memassukan file
}
    else {
echo "Failure name file";
}
?>

