<?php

class NameAge extends BotQuestion {

	private $question = '*my name is {name} and Im {age} years old*';

	public function getQuestionPattern(){
		return $this->question;
	}

	public function answer($bot,$name,$age){
		return "{$name} you are the best {$age} years old friend I had ever known.";
	}

}