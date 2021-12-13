<?php 

declare(strict_types=1);

namespace YTBJero\SetBlock;

use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\math\Vector3;
class Main extends PluginBase{

	public function onEnable(): void 
	{
		$this->getLogger()->info("It enable");
	}

	public function onCommand(CommandSender $s, Command $cmd, String $label, Array $args): bool 
	{
		if($cmd->getName() == "setblock"){
			if($s->isOp()){
				if(!isset($args[0])){
					$s->sendMessage("Usage: /setblock (id) (meta)");
					return false;
				}
				if(!isset($args[1])){
					$s->sendMessage("Usage: /setblock (id) (meta)");
					return false;
				
				$x = $s->getX();
				$y = $s->getY();
				$z = $s->getZ();
				$level = $s->getLevel();
				$block = $args[0];
				$meta = $args[1];
				$level->setblock(new Vector3($x, $y, $z), Block::get((int)$block, (int)$meta));
			}
		}
		return true;
	}
}
