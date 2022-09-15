<!DOCTYPE html>
<html>
    <body>
        <fieldset>
        <?php
        $xml=simplexml_load_file("alertsfeed.xml") or die("Virhe: XML-syötteen käsittely epäonnistui");
        echo "<b>".$xml->channel->title."</b><br>";
        echo "<b>".$xml->channel->description."</b><br>";
        echo "<b>".$xml->channel->pubDate."</b><br>";
        echo "<br>";
        
        foreach($xml->channel->item as $item) {
            echo $item->title."<br>";
            echo $item->description."<br>";
            echo $item->pubDate."<br>";
            echo "<br>";
        }   
        ?>
        </fieldset>
    </body>
</html>