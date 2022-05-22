<?php 
namespace DesignPatterns\MyCreational\AbstractFactory\Tests;
use PHPUnit\Framework\TestCase;

class AbstractFactory extends TestCase
{
    // public function providerTestSluggifyReturnsSluggifiedString()
    // {
    //     return [
    //         ['This string will be sluggified'],
    //     ];
    // }
    public function testMyTest()
    {
        $this->assertEquals('bar', 'barv');
    }
}

?>