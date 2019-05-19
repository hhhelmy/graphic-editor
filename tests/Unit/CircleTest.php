<?php

namespace Tests\Unit;

use Tests\TestCase;

class CircleTest extends TestCase {

    /**
     * Test Set Radius
     *
     * @return void
     */
    public function testSetRadius() {
        $circle = new \App\Graphics\Circle(8, 9, 76, array());
        $value = 76;
        $circle->setRadius($value);
        $this->assertEquals($value, $circle->getRadius());
    }

    /**
     * Test Draw
     *
     * @return void
     */
    public function testDraw() {
        $circle = new \App\Graphics\Circle(11, 63, 53, array());

        $this->assertEquals(array("points" => ["X" => 11, "Y" => 63, "Radius" => 53], "attributes" => ["color" => null, "borderSize" => null]), $circle->draw());
    }

}
