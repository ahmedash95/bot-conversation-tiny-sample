<?php

class Age extends BotQuestion {

	private $question = '*i\'m {age} years old*';

	public function getQuestionPattern(){
		return $this->question;
	}

	public function answer($bot,$age){
		return "Oh great. now I know your age is {$age}";
	}

}