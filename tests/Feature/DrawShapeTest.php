<?php

namespace Tests\Feature;

use Tests\TestCase;

class DrawShapeTest extends TestCase {

    /**
     * Test all shapes drawing feature
     *
     * @return void
     */
    public function testDrawAllShapes() {


        $payload = ["shapes" => [["type" => "circle", "params" => ["x" => 1, "y" => 2, "radius" => 12, "color" => "blue"]],
                ["type" => "square", "params" => ["x" => 5, "y" => 6, "side" => 5, "borderSize" => "2"]]]];
        // $payload = json_encode($payload);


        $this->json('POST', '/api/drawAllShapes', $payload)
                // ->assertStatus(200)
                ->assertJson(
                        [
                            ["points" => ["X" => 1, "Y" => 2, "Radius" => 12], "attributes" => ["color" => "blue", "borderSize" => null]],
                            ["points" => ["X" => 5, "Y" => 6, "Side" => 5], "attributes" => ["color" => null, "borderSize" => 2]]]
        );
    }

    /**
     * Test Circle drawing feature
     *
     * @return void
     */
    public function testDrawCircle() {


        $payload = ["x" => 33, "y" => 44, "radius" => 12, "borderSize" => 2];


        $this->json('POST', 'api/drawCircle', $payload)
                ->assertStatus(200)
                ->assertJson(
                        ["points" => ["X" => 33, "Y" => 44, "Radius" => 12,], "attributes" => ["color" => null, "borderSize" => 2]]
        );
    }

    /**
     * Test Rectangle drawing feature
     *
     * @return void
     */
    public function testDrawRectangle() {


        $payload = ["x" => 1, "y" => 2, "width" => 12, "height" => 22, "color" => "blue"];

        $this->json('POST', 'api/drawRectangle', $payload)
                ->assertStatus(200)
                ->assertJson(
                        ["points" => ["X" => 1, "Y" => 2, "Width" => 12, "Height" => 22], "attributes" => ["color" => "blue", "borderSize" => null]]
        );
    }

    /**
     * Test Square drawing feature
     *
     * @return void
     */
    public function testDrawSquare() {


        $payload = ["x" => 98, "y" => 33, "side" => 12, "borderSize" => 1, "color" => "blue"];

        $this->json('POST', 'api/drawSquare', $payload)
                ->assertStatus(200)
                ->assertJson(
                        ["points" => ["X" => 98, "Y" => 33, "Side" => 12], "attributes" => ["color" => "blue", "borderSize" => 1]]
        );
    }

}
