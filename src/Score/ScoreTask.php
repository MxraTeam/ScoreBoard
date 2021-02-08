<?php

namespace Score;

use pocketmine\scheduler\Task;
use pocketmine\{Player, Server};
use Scoreboards\Scoreboards;
class ScoreTask extends Task
{
     public function onRun(int $currentTick)
     {
     foreach(Server::getInstance()->getOnlinePlayers() as $sender)
     {
    //board
    $api = Scoreboards::getInstance();
    $api->new($sender, "ObjectiveName", "Text1");
    $api->setLine($sender, 1, "test 1");
    $api->setLine($sender, 2, "test 2");
	 	 }
	 }
}
