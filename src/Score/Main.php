<?php

namespace Score;

use pocketmine\plugin\PluginBase;
use pocketmine\{Player, Server};
use Score\ScoreTask;
use Scoreboards\Scoreboards;
use pocketmine\utils\MainLogger;

class Main extends PluginBase
{
	
	 public function onEnable()
	 {
	     MainLogger::getLogger()->info("Plugin Online - Scoreboard");
	 	 $this->getScheduler()->scheduleRepeatingTask(new ScoreTask($this), 20);
	 }
}
