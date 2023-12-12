<?php
$xml=new DOMDocument();
$xml->load("class.xml");
if($xml->validate()){
    echo "valid";
}
else{
    echo "not valid";
}
?>