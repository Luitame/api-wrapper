<?php

use Luitame\ApiWrapper\HttpClient;
use Luitame\ApiWrapper\Seller;
use PHPUnit\Framework\TestCase;

final class WrapperTest extends TestCase {
    public function testIfTrueIsTrue()
    {
        $foo = (new Seller(new HttpClient()));
        $this->isTrue(true);
    }
}
