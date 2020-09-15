<?php
header("Content-Type: application/json; charset=UTF-8");
require 'database.php';
require 'Player.php';

$req=$_GET['req'] ?? null;
$db=new database();
$player= new player($db->connect());

switch($req){
    case 'insert':
        $obj=$_GET['object'];
        $temp=json_decode($obj);
        echo $player->insertplayer($temp);
        break;

    case 'list':
        echo $player->getplayer();
        break;

    default:
        echo json_encode(["In-valid request"]);
        break;
}
?>