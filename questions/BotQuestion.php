<?php 

abstract class BotQuestion{
	// return pattern of the questions
	public function getQuestionPattern(){
		throw new Exception("Invalid Question Pattern");
	}
	// the answer of that question
	public function getAnswer(){
		if(!method_exists($this, 'answer')){
			throw new Exception("Question Class has now answer method implemented");
		};
		return $this->answer(...func_get_args());
	}
}