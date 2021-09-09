<?php

/* ---------------- Fivem Server Connection-------------------- */
/* You must update your server details in here */

$server_settings['title'] = "Default"; 
$server_settings['ip'] = "localhost"; 
$server_settings['port'] = "30120"; /*  Default Port is "30120" is your's one different ? update it */
$server_settings['max_slots'] = 64;

/* ------------------------------------------------------------ */

$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $fivem_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
    $content = json_decode($fivem_players, true);
    $player_count = count($content);
    $SERVER_STATUS = "<font style='color: green;'>Online</font>";  

    else:
        $SERVER_STATUS = "<font style='color: red;'>Offline</font>";
endif;



?>

<html>


<span>Status : <?php echo "$SERVER_STATUS"; ?> </span> 
<span>Players : <?php echo "$player_count / $server_settings[max_slots]"; ?></span>

</html>