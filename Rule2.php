<?php

class rule2 extends Rule implements RuleInterface{


	protected $nextRule;


	public function setNextRule(RuleInterface $rule){

		$this->nextRule = $rule;

	}

	public function validate(){

		echo "I am inside rule 2" .PHP_EOL;
		$i = 0;
		if($i == 1){
			$this->setError('Error occurred in rule 2');
			return false;
		}

		if($this->nextRule != NULL){

			$this->nextRule->validate();
		}
	}
}