<?

namespace RuleEngine;

interface RuleInterface {

	public function validate();

	public function setNextRule(self $rule );

}
