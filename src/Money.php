<?php
namespace Dojo;

class Money {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function get_amount() {
        return $this->amount;
    }

    public function negate() {
        return new Money(-1 * $this->amount);
    }
}
