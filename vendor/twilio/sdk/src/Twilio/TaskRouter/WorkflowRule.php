<?php

namespace Twilio\TaskRouter;

/**
 * Twilio TaskRouter Workflow Rule
 *
 * @author Justin Witz <jwitz@twilio.com>
 * @license  http://creativecommons.org/licenses/MIT/ MIT
 */
class WorkflowRule implements \JsonSerializable {
    public $expression;
    public $friendly_name;
    public $targets;

<<<<<<< HEAD
    public function __construct(string $expression, array $targets, string $friendly_name = null) {
=======
    public function __construct(string $expression, array $targets, ?string $friendly_name = null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->expression = $expression;
        $this->targets = $targets;
        $this->friendly_name = $friendly_name;
    }

    public function jsonSerialize(): array {
        $json = [];
        $json['expression'] = $this->expression;
        $json['targets'] = $this->targets;
        if ($this->friendly_name !== null) {
            $json['friendly_name'] = $this->friendly_name;
        }
        return $json;
    }
}
