<?php

namespace Dojo\Tests;
use Dojo\Money;

class MoneyTest extends \PHPUnit_Framework_TestCase {
    public function testCanBeNegated() {
        $a = new Money(1);

        $b = $a->negate();

        $this->assertEquals(-1, $b->get_amount());
    }
}
 