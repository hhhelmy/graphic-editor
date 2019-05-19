<?php

namespace Tests\Unit;

use Tests\TestCase;

class SquareTest extends TestCase {

    /**
     * Test Set Side
     *
     * @return void
     */
    public function testSetSide() {
        $square = new \App\Graphics\Square(1, 2, 20, array());
        $value = 20;
        $square->setSide($value);
        $this->assertEquals($value, $square->getSide());
    }

    /**
     * Test Draw
     *
     * @return void
     */
    public function testDraw() {
        $square = new \App\Graphics\Square(1, 2, 20, array());

        $this->assertEquals(array("points" => ["X" => 1, "Y" => 2, "Side" => 20], "attributes" => ["color" => null, "borderSize" => null]), $square->draw());
    }

}
