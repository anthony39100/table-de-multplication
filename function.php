<?php
session_start();
function listTable(){
 for($i=1;$i<=10;$i++){
    echo $_GET ['tableau']."x".$i."=".$_GET['tableau']*$i."<br/>";
 }
}

function  fullTable($tout){
    foreach($tout AS $value){
     echo 'table du '.$value."<br/>";
    for($j=1;$j<=10;$j++){
        echo $value."x".$j."=".$value*$j ."<br/>";
    }
}
}
echo fullTable($_POST['tableaux']);

//je creer une fonction qui récupere la valeur des tableaux
$random=rand(0,10);
function question($tout){
    foreach($tout AS $value){
        echo 'table du '.$value."<br/>";
    
    }
}

function result($tout,$rand){
    foreach($tout as $value){
     return  $value*$rand;
      //return  $tout."*".$rand;
    
}
}
