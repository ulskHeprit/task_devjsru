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
        $dog = new Pug();
        $this->assertEquals('Woof! Woof!', $dog->getSound());
        $this->assertEquals('Pug is lazy.', $dog->hunting());
    }

    public function testDachshund()
    {
        $dog = new Dachshund();
        $this->assertEquals('Woof! Woof!', $dog->getSound());
        $this->assertEquals('Dog to hunt.', $dog->hunting());
    }

    public function testPlushLabrador()
    {
        $dog = new PlushLabrador();
        $this->assertEquals(null, $dog->getSound());
        $this->assertEquals(null, $dog->hunting());
    }

    public function testRubberDachshundWithSpeaker()
    {
        $dog = new RubberDachshundWithSpeaker();
        $this->assertEquals('Sound from speaker.', $dog->getSound());
        $this->assertEquals(null, $dog->hunting());
    }

    public function testShibaInu()
    {
        $dog = new ShibaInu();
        $this->assertEquals('Woof! Woof!', $dog->getSound());
        $this->assertEquals('Dog to hunt.', $dog->hunting());
    }

    public function testConsole()
    {
        $result = `php index.php`;
        $this->assertStringContainsString("Wrong dog name", $result);

        $result = `php index.php pug`;
        $this->assertStringContainsString("Wrong command", $result);

        $result = `php index.php pug sound`;
        $this->assertEquals("Woof! Woof!" . PHP_EOL, $result);

        $result = `php index.php pug hunting`;
        $this->assertEquals("Pug is lazy." . PHP_EOL, $result);

        $result = `php index.php dachshund sound`;
        $this->assertEquals("Woof! Woof!" . PHP_EOL, $result);

        $result = `php index.php dachshund hunting`;
        $this->assertEquals("Dog to hunt." . PHP_EOL, $result);

        $result = `php index.php plushlabrador sound`;
        $this->assertEquals(PHP_EOL, $result);

        $result = `php index.php plushlabrador hunting`;
        $this->assertEquals(PHP_EOL, $result);

        $result = `php index.php rubberdachshund sound`;
        $this->assertEquals("Sound from speaker." . PHP_EOL, $result);

        $result = `php index.php rubberdachshund hunting`;
        $this->assertEquals(PHP_EOL, $result);

        $result = `php index.php shibainu sound`;
        $this->assertEquals("Woof! Woof!" . PHP_EOL, $result);

        $result = `php index.php shibainu hunting`;
        $this->assertEquals("Dog to hunt." . PHP_EOL, $result);
    }
}