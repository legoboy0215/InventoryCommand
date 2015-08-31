<?php

namespace InventoryCommand;

use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\level\Level;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "InventoryCommand Enabled!");
        $this->saveDefaultConfig();

        if(count($this->getConfig()->get("data")) > 35){
            $this->getLogger()->error("Exeption: Number of slots out of range!");
            $this->getServer()->shutdown();
        }
    }

    public function onLoad(){
        $this->getLogger()->info(TextFormat::YELLOW . "Loading InventoryCommand...");
    }

    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED . "InventoryCommand Disabled!");
        $this->getConfig()->save();
    }

    private function isAllowedWorld(Level $level){
        $level = strtolower($level->getName());
        $get = $this->getConfig()->get("level");
        if(empty($get) || !$get)
            return true;
        else{
            $e = explode(",", $get);
            if(count($e) > 1){
                foreach($e as $l){
                    if(strtolower(trim($l)) == $level)
                        return true;
                }
                return false;
            }else{
                return $level == strtolower(trim($get));
            }
        }
    }

    public function onItemHeld(PlayerItemHeldEvent $event){
        $player = $event->getPlayer();
        $item = $event->getItem();

        if(!$this->isAllowedWorld($player->getLevel()))
            return;

        foreach($this->getConfig()->get("data") as $slot => $g) {
            if ($item->getId() === $g["id"] && $item->getDamage() === $g["damage"]) {
                foreach ($g["command"] as $cmd) {
                    $this->getServer()->dispatchCommand(new ConsoleCommandSender(), str_replace("{player}", $player->getName(), $cmd));
                }
            }
        }
    }

    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();

        if($player->isCreative())
            return;
        foreach($this->getConfig()->get("data") as $slot => $g){
            $item = new Item($g["id"], $g["damage"]);
            if($item->getId() != Block::AIR && $item->getMaxStackSize() <= $g["count"]){
                $item->setCount($g["count"]);
                if(!$player->getInventory()->contains($item) && $player->getInventory()->canAddItem($item)){
                    $player->getInventory()->addItem($item);
                }
            }
        }
    }
}
