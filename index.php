<?php

require_once('Bot.php');
require_once('questions/BotQuestion.php');
require_once('questions/Hello.php');
require_once('questions/Age.php');
require_once('questions/NameAge.php');

$questions = [];
$questions[] = "my name is Ahmed!";
$questions[] = "and I'm 22 years old";
$questions[] = "Hey, my name is ash and Im 22 years old";

$bot = new Bot();

$bot->addQuestion(new Hello);
$bot->addQuestion(new Age);
$bot->addQuestion(new NameAge);

echo "BOT: What's your name ?\n";
foreach ($questions as $message) {
	echo "HUMAN: ".$message;
	echo "\n";
	$bot->ask($message);
	echo "BOT: ".$bot->getAnswer();
	echo "\n";
}