<?php
include "connect.php";

?>

<?php

$id = $_GET['id'] ?? NULL;
$series = $pdo->query("SELECT * FROM series WHERE id=$id");

while(  $show = $series->fetch()){
    echo "<h1>".$show['title'].' - '.$show['rating']."</h1>";
    if($show['has_won_awards'] >= 1){
        $yes = "ja";
    }else{
        $yes = "Nee";
    }
    echo "<p>Awards? ".$yes."</p>";
    echo "<p>Seasons? ".$show['seasons']."</p>";
    echo "<p>Country? ".$show['country']."</p>" ;
    echo "<p>Language? ".$show['language']."</p>" ;
    echo $show['description'];

};



