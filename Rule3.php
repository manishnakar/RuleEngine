<?php

class rule3 extends Rule implements RuleInterface{


	protected $nextRule;

	public function setNextRule(RuleInterface $rule){

		$this->nextRule = $rule;

	}


	public function validate(){

		$i = 0;
		echo "I am inside rule 3" .PHP_EOL;

		if($i == 1){
			$this->setError('Error occurred in rule 3');
			return false;
		}

		if($this->nextRule != NULL){

			$this->nextRule->validate();
		}
	}
}