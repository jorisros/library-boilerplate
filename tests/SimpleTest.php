<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testSum()
    {
        $simple = new \JorisRos\NameLibrary\Simple();
        $this->assertEquals($simple->sum(4, 4), 8);
        $this->assertEquals($simple->sum(4.4, 4.4), 8.8);
    }
}
