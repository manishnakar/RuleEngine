<?php


class me{

	public function validate(){


		$err = new validationError();

		$a = new rule1($err);
		$b = new rule2($err);
		$c = new rule3($err);

		//Start assigning next rule to be checked
		$a->setNextRule($b);
		$b->setNextRule($c);

		//Call the first instace to start chain
		$a->validate();

		//error object class return error
		echo $err->getError();

	}
}


echo "Welcome" .PHP_EOL;

$m = new me();

$m->validate();



