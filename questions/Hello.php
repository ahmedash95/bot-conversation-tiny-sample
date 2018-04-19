<?php

class Hello extends BotQuestion {

	private $question = '*my name is {name}*';

	public function getQuestionPattern(){
		return $this->question;
	}

	public function answer($bot,$name){
		return "Hello {$name}";
	}

}