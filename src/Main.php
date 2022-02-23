<?php


declare(strict_types=1);

namespace Reared\PlayerJoin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent; 
use pocketmine\scheduler\PluginTask;

use plugin\Loader;

class Main extends PluginBase implements Listener{

public function onEnable() : void{ 

$this->getServer()->getPluginManager()->registerEvents($this, $this);

} 
 public function onJoin(PlayerJoinEvent $event){
 $player = $event->getPlayer();
 $name = $player->getName();
 $event->setJoinMessage("§c§lСмотрите кто! §6{$name} §cзашел!");
 $player->sendMessage("§f§l[§9Oves§6Play §fLobby] §4§o{$name} §f§lхорошей игры!");


$player->sendTip("§lИгрок §c{$name} §fзашел на сервер!");

 }
}