<?php

namespace RuleEngine;

class rule1 extends Rule implements RuleInterface{


	protected $nextRule;

	public function setNextRule(RuleInterface $rule){

		$this->nextRule = $rule;

	}

	public function validate(){


		echo "I am inside rule 1" .PHP_EOL;
		$i = 1;
		if($i == 0){

			$this->setError('Error occurred in rule 1');
			return false;
		}

		if($this->nextRule != NULL){



			$this->nextRule->validate();
		}
	}
}