<?php

namespace InventoryCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\inventory\PlayerInventory;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::GREEN . "CompassCommand Enabled!");
$this->saveDefaultConfig();
}

public function onLoad(){
$this->getLogger()->info(TextFormat::YELLOW . "Loading CompassCommand...");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::RED . "CompassCommand Disabled!");
$this->getConfig()->save();
}

public function onItemHeld(PlayerItemHeldEvent $event){
$player = $event->getPlayer();
$item = $event->getItem();

foreach($this->getConfig()->get("commands1") as $cmd1){
$configitem1 = $this->getConfig()->get("item1");
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem1 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd1));
       }
     }
$configitem2 = $this->getConfig()->get("item2");
foreach($this->getConfig()->get("commands2") as $cmd2){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem2 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd2));
       }
     }
$configitem3 = $this->getConfig()->get("item3");
foreach($this->getConfig()->get("commands3") as $cmd3){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem3 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd3));
         }
      }
$configitem4 = $this->getConfig()->get("item4");
foreach($this->getConfig()->get("commands4") as $cmd4){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem4 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd4));
         }
      }
$configitem5 = $this->getConfig()->get("item5");
foreach($this->getConfig()->get("commands5") as $cmd5){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem5 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd5));
         }
      }
$configitem6 = $this->getConfig()->get("item6");
foreach($this->getConfig()->get("commands6") as $cmd6){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem6 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd6));
         }
      }
$configitem7 = $this->getConfig()->get("item7");
foreach($this->getConfig()->get("commands7") as $cmd7){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem7 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd7));
         }
      }
$configitem8 = $this->getConfig()->get("item8");
foreach($this->getConfig()->get("commands8") as $cmd8){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem8 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd8));
         }
      }
$configitem9 = $this->getConfig()->get("item9");
foreach($this->getConfig()->get("commands9") as $cmd9){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem9 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd9));
         }
      }
$configitem10 = $this->getConfig()->get("item10");
foreach($this->getConfig()->get("commands10") as $cmd10){
$level = $player->getLevel();
$conflevel = $this->getConfig()->get("level");
if($item->getID() == $configitem10 && $level->getName() == $conflevel){
$this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd10));
         }
      }
}

	public function onJoin(PlayerJoinEvent $event){
$player = $event->getPlayer();
$slot = $this->getConfig()->get("slot");
$item = $this->getConfig()->get("ID");
$damage = $this->getConfig()->get("Damage");
$ammount = $this->getConfig()->get("Ammount");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot2");
$item = $this->getConfig()->get("ID2");
$damage = $this->getConfig()->get("Damage2");
$ammount = $this->getConfig()->get("Ammount2");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot3");
$item = $this->getConfig()->get("ID3");
$damage = $this->getConfig()->get("Damage3");
$ammount = $this->getConfig()->get("Ammount3");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot4");
$item = $this->getConfig()->get("ID4");
$damage = $this->getConfig()->get("Damage4");
$ammount = $this->getConfig()->get("Ammount4");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot5");
$item = $this->getConfig()->get("ID5");
$damage = $this->getConfig()->get("Damage5");
$ammount = $this->getConfig()->get("Ammount5");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot6");
$item = $this->getConfig()->get("ID6");
$damage = $this->getConfig()->get("Damage6");
$ammount = $this->getConfig()->get("Ammount6");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot7");
$item = $this->getConfig()->get("ID7");
$damage = $this->getConfig()->get("Damage7");
$ammount = $this->getConfig()->get("Ammount7");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot8");
$item = $this->getConfig()->get("ID8");
$damage = $this->getConfig()->get("Damage8");
$ammount = $this->getConfig()->get("Ammount8");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot9");
$item = $this->getConfig()->get("ID9");
$damage = $this->getConfig()->get("Damage9");
$ammount = $this->getConfig()->get("Ammount9");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
$slot = $this->getConfig()->get("slot10");
$item = $this->getConfig()->get("ID10");
$damage = $this->getConfig()->get("Damage10");
$ammount = $this->getConfig()->get("Ammount10");
if($slot <= 35){
$player->getInventory()->setItem($slot , Item::get($item, $damage, $ammount));
   }
	}
}
