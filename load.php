<?php
$playeronline = file_get_contents('https://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=135.125.65.203&port=25581');
$maxplayer = file_get_contents('https://api.serveurs-minecraft.com/api.php?Joueurs_Maximum_Ping&ip=135.125.65.203&port=25581');
$favicon = file_get_contents('https://api.serveurs-minecraft.com/api.php?Favicon_Ping&ip=135.125.65.203&port=25581');
$timer = file_get_contents('https://api.serveurs-minecraft.com/api.php?Latence_Ping&ip=135.125.65.203&port=25581');
?>

