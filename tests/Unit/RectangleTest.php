<?php

namespace Tests\Unit;

use Tests\TestCase;

class RectangleTest extends TestCase {

    /**
     * Test Set Width
     *
     * @return void
     */
    public function testSetWidth() {
        $rectangle = new \App\Graphics\Rectangle(8, 9, 3, 4, array());
        $value = 3;
        $rectangle->setWidth($value);
        $this->assertEquals($value, $rectangle->getWidth());
    }

    /**
     * Test Set Height
     *
     * @return void
     */
    public function testSetHeight() {
        $rectangle = new \App\Graphics\Rectangle(8, 9, 3, 4, array());
        $value = 4;
        $rectangle->setHeight($value);
        $this->assertEquals($value, $rectangle->getHeight());
    }

    /**
     * Test Draw
     *
     * @return void
     */
    public function testDraw() {
        $rectangle = new \App\Graphics\Rectangle(11, 63, 6, 7, array());

        $this->assertEquals(array("points" => ["X" => 11, "Y" => 63, "Width" => 6, "Height" => 7], "attributes" => ["color" => null, "borderSize" => null]), $rectangle->draw());
    }

}
