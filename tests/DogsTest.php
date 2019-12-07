<?php
require_once __DIR__ . "/../classes/Dog.php";
require_once __DIR__ . "/../classes/Pug.php";
require_once __DIR__ . "/../classes/Dachshund.php";
require_once __DIR__ . "/../classes/PlushLabrador.php";
require_once __DIR__ . "/../classes/RubberDachshundWithSpeaker.php";
require_once __DIR__ . "/../classes/ShibaInu.php";

use PHPUnit\Framework\TestCase;

class DogsTest extends TestCase
{
    public function testPug()
    {
        $pug = new Pug();
        $this->assertEquals("Woof! Woof!", $pug->getSound());
        $this->assertEquals("Pug is lazy.", $pug->hunting());
    }

    public function testDachshund()
    {
        $pug = new Dachshund();
        $this->assertEquals("Woof! Woof!", $pug->getSound());
        $this->assertEquals("Dog to hunt.", $pug->hunting());
    }

    public function testPlushLabrador()
    {
        $pug = new PlushLabrador();
        $this->assertEquals("It's a toy.", $pug->getSound());
        $this->assertEquals("It's a toy.", $pug->hunting());
    }

    public function testRubberDachshundWithSpeaker()
    {
        $pug = new RubberDachshundWithSpeaker();
        $this->assertEquals("Sound from speaker.", $pug->getSound());
        $this->assertEquals("It's a toy.", $pug->hunting());
    }

    public function testShibaInu()
    {
        $pug = new ShibaInu();
        $this->assertEquals("Woof! Woof!", $pug->getSound());
        $this->assertEquals("Dog to hunt.", $pug->hunting());
    }
}