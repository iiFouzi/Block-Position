<?php

namespace blockpos\iiFouzi;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\block\Block;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerIneteractEvent;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener 
{
  
  public function onEnable()
  {
    $this->getServer()->getLogger()->info(TF::BLUE . "BlockPs has been enabled");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onTap(PlayerIneteractEvent $event)
  {
    $player = $event->getPlayer();
    $block = $event->getBlock;
    if($player->getAction() === PlayerIneteractEvent::RIGHT_CLICK_BLOCK){
      $x = $block->getX();
      $y = $block->getY();
      $z = $block->getZ();
      $player->sendMessage(TF::GREEN . "Tapped Block coordinates are\n Z: " . $z . "\n Y: " . $y . "\n X: " . $x)
    }
  }
  
  public function onDisable()
  {
    $this->getServer()->getLogger()->info(TF::RED . "BlockPs has been disabled");
  }
  
}
