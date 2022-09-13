<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("alertsfeed.xml") or die("Virhe: XML-syötteen käsittely epäonnistui");

foreach($xml->children() as $channel) {
    echo $channel->title. "<br>";
    echo $channel->description. "<br>";
    echo $channel->pubDate. "<br>";
    echo "<br>";

    foreach($channel->children() as $item) {
        echo $item->title. "<br>";
        echo $item->description. "<br>";
        echo $item->pubDate. "<br>";
        echo "<br>";
    }
}
?>

</body>
</html>