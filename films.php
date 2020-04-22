<?php
$servername = "localhost";
$username = "root";
$password = "";



try {
    $pdo = new PDO("mysql:host=$servername;dbname=netland", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<?php


$series = $pdo->query('SELECT * FROM movies');


$id = $_GET['title'];

if ($_GET['title'] == 1){

$series = $pdo->query("SELECT * FROM movies WHERE id=$id");

while(  $show = $series->fetch()){
    $yt_id =$show['youtube_trailer_id'];
    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
    $width = '800px';
    $height = '450px';
    echo "<h1>".$show['title'].' - '.$show['duur']." Minuten </h1>";

echo "<p>Datum van uitkomst? ".$show['datum_van_uitkomst']."</p>";
echo "<p>Land van uitkomst? ".$show['land_van_uitkomst']."</p>";
        ?> <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $yt_id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen></iframe> 
        <?php
    echo "<p>".$show['description']."</p>";

};

}


$series = $pdo->query('SELECT * FROM movies');


$id = $_GET['title'];

if ($_GET['title'] == 2){

$series = $pdo->query("SELECT * FROM movies WHERE id=$id");

while(  $show = $series->fetch()){
    $yt_id =$show['youtube_trailer_id'];
    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
    $width = '800px';
    $height = '450px';
    echo "<h1>".$show['title'].' - '.$show['duur']." Minuten </h1>";

echo "<p>Datum van uitkomst? ".$show['datum_van_uitkomst']."</p>";
echo "<p>Land van uitkomst? ".$show['land_van_uitkomst']."</p>";
        ?> <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $yt_id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen></iframe> 
        <?php
    echo "<p>".$show['description']."</p>";

};

}

$series = $pdo->query('SELECT * FROM movies');


$id = $_GET['title'];

if ($_GET['title'] == 3){

$series = $pdo->query("SELECT * FROM movies WHERE id=$id");

while(  $show = $series->fetch()){
    $yt_id =$show['youtube_trailer_id'];
    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
    $width = '800px';
    $height = '450px';
    echo "<h1>".$show['title'].' - '.$show['duur']." Minuten </h1>";

echo "<p>Datum van uitkomst? ".$show['datum_van_uitkomst']."</p>";
echo "<p>Land van uitkomst? ".$show['land_van_uitkomst']."</p>";
        ?> <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $yt_id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen></iframe> 
        <?php
    echo "<p>".$show['description']."</p>";

};

}

$series = $pdo->query('SELECT * FROM movies');


$id = $_GET['title'];

if ($_GET['title'] == 4){

$series = $pdo->query("SELECT * FROM movies WHERE id=$id");

while(  $show = $series->fetch()){
    $yt_id =$show['youtube_trailer_id'];
    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
    $width = '800px';
    $height = '450px';
    echo "<h1>".$show['title'].' - '.$show['duur']." Minuten </h1>";

echo "<p>Datum van uitkomst? ".$show['datum_van_uitkomst']."</p>";
echo "<p>Land van uitkomst? ".$show['land_van_uitkomst']."</p>";
        ?> <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $yt_id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen></iframe> 
        <?php
    echo "<p>".$show['description']."</p>";

};

}

$series = $pdo->query('SELECT * FROM movies');


$id = $_GET['title'];

if ($_GET['title'] == 5){

$series = $pdo->query("SELECT * FROM movies WHERE id=$id");

while(  $show = $series->fetch()){
    $yt_id =$show['youtube_trailer_id'];
    $url = 'https://www.youtube.com/watch?v=u9-kU7gfuFA';
    $width = '800px';
    $height = '450px';
    echo "<h1>".$show['title'].' - '.$show['duur']." Minuten </h1>";

echo "<p>Datum van uitkomst? ".$show['datum_van_uitkomst']."</p>";
echo "<p>Land van uitkomst? ".$show['land_van_uitkomst']."</p>";
        ?> <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
        src="https://www.youtube.com/embed/<?php echo $yt_id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
        frameborder="0" allowfullscreen></iframe> 
        <?php
    echo "<p>".$show['description']."</p>";

};

}