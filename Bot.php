<?php

class Bot {
	private $questions = [];

	private $currentQuestion;
	private $questionMatches;

	public function addQuestion(BotQuestion $q){
		$this->questions[] = $q;
	}
	public function Ask(string $message){
		$this->questionMatches = [];
		foreach($this->questions as $q){
			$pattern = $q->getQuestionPattern();
			$pattern = str_replace('\'','\\\'',$pattern);
			$pattern = str_replace('*','(?:.*)',$pattern);
			$pattern = preg_replace('#\{.*?\}#', '(\w+)', $pattern);
			preg_match_all('#'.$pattern.'#i', $message, $matches);
			if(count($matches[0]) > 0){
				$this->currentQuestion = $q;
				$this->questionMatches = [];
				array_shift($matches);
				foreach($matches as $m){
					$this->questionMatches[] = $m[0];
				}
			}
		}
	}

	public function getAnswer(){
		return $this->currentQuestion->getAnswer($this,...$this->questionMatches);
	}
}