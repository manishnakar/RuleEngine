<?php


namespace RuleEngine;

class validationError
{

    private $_error;

    public function setError($value)
    {

    	echo "Error Set" .PHP_EOL;
        $this->_error = $value;
    }

    public function getError()
    {
    	echo "Error Get" .PHP_EOL;
        return $this->_error;
    }

}

