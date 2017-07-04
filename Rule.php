<?


namespace RuleEngine;

abstract class Rule{

	private $_error;

	public function __construct(validationError $err){

		$this->_error = $err;
	}

	 public function setError($value)
    {

    	echo "Error Set in abstract class" .PHP_EOL;
        $this->_error->setError($value);
    }

}
