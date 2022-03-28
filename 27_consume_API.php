<?php

/*
we wants to show the data from this api using this endpoint 
https://api.dailymotion.com/videos?channel=sport&limit=10

so we wants to convert that json to a list 
*/

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$options = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

//stream_context_create -> put off the restriction of ssl = https  
$result = file_get_contents($url, false, stream_context_create($options));

$objResult = json_decode($result);

//print_r($objResult);

/*
stdClass Object ( [page] => 1 [limit] => 10 [explicit] => [total] => 1000 [has_more] => 1 [list] => Array ( [0] => stdClass Object ( [id] => x89ffyb [title] => Cactus Yards Angel - Spring Training III 26 Mar 20:46 [channel] => sport [owner] => x2lzko4 ) [1] => stdClass Object ( [id] => x89ffvg [title] => Victory Lane #6 - Spring Training III 26 Mar 20:47 [channel] => sport [owner] => x2lzko4 ) [2] => stdClass Object ( [id] => x89fgaq [title] => McDonalds Field March Madness (KC Sports) 26 Mar 18:48 [channel] => sport [owner] => x2lzko4 ) [3] => stdClass Object ( [id] => x89fg1e [title] => Dodger - Sin City Classic (2022) 26 Mar 20:37 [channel] => sport [owner] => x2lzko4 ) [4] => stdClass Object ( [id] => x89fgid [title] => Alphonso Davis rompió en llanto tras la clasificación de Canadá a Qatar 2022 [channel] => sport [owner] => x1dyzv5 ) [5] => stdClass Object ( [id] => x89ffuw [title] => Yankee - Sin City Classic (2022) 27 Mar 00:44 [channel] => sport [owner] => x2lzko4 ) [6] => stdClass Object ( [id] => x89ffxv [title] => Cactus Yards Dbacks - Spring Training III 26 Mar 20:47 [channel] => sport [owner] => x2lzko4 ) [7] => stdClass Object ( [id] => x89fg69 [title] => Yankee - Sin City Classic (2022) 26 Mar 19:44 [channel] => sport [owner] => x2lzko4 ) [8] => stdClass Object ( [id] => x89ffvv [title] => Cactus Yards Ebbets - Spring Training III 26 Mar 20:48 [channel] => sport [owner] => x2lzko4 ) [9] => stdClass Object ( [id] => x89fg95 [title] => Jornada Esportiva 98 - Atlético x Caldense - Parte 02 27/03/22 [channel] => sport [owner] => x2healg ) ) )

*/
echo "<br/>";
/*
page	1
limit	10
explicit	false
total	1000
has_more	true
list []
*/
// access to (list) 
foreach ($objResult->list as $video) {
    # code...
    //print_r($video)."<br />";
    /****
     *
        0:	
        id	"x89ffx5"
        title "Victory Lane #1 - Spring Training III 26 Mar 20:47"
        channel	"sport"
        owner "x2lzko4"
     */

    //access to a channel and title for example
    //print_r($video->channel) . "<br />";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($objResult->list as $video) { ?>
            <li><?php echo ($video->title) ?> | <?php echo ($video->channel); ?></li>
        <?php } ?>

    </ul>

    <!-- Crosley - Sin City Classic (2022) 26 Mar 20:35 | sport
Race Rewind: Late-race contact decides winner at COTA | sport
Chastain stands by final-lap move for COTA win: ‘I did what I did’ Copy | sport
Margaritas Field (KC Sports) 26 Mar 18:51 | sport
Indiana's Ali Patberg and Coach Teri Moren Address Media Following Sweet 16 Loss to UConn | sport
Cactus Yards Yankee - Spring Training III 26 Mar 20:46 | sport
The Landing Field March Madness (KC Sports) 26 Mar 18:50 | sport
Victory Lane #2 - Spring Training III 26 Mar 20:45 | sport
Cactus Yard Polo - Spring Training III 26 Mar 20:46 | sport
Cactus Yards Yankee - Spring Training III 27 Mar 00:39 | sport
</body> -->

</html>