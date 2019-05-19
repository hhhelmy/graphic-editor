<?php

namespace App\Graphics;

/**
 * Square Class. This class contains the attributes and implementation of the Square Shape
 * 
 * @author   Hatem Hassan <hatem.hassan@gmail.com>
 */
class Square extends Shape {

    private $side;

    /**
     * 
     * This function is the class Square constructor which initialize the x, y, side and other parameters for the Square
     *
     *  @param Float $x  X-Axis of the shape to be drawn from
     *  @param Float $y  Y-Axis of the shape to be drawn from
     * @param Float $sideVal  Side of the shape
     *  @param Array $otherParams  Array of other parameters of the shape
     */
    function __construct($x, $y, $sideVal, $otherParams) {
        parent::__construct($x, $y, $otherParams); // Call the parent Shape class Constructor to initialize the Coordinates of the shape that will be drawn
        $this->setSide($sideVal);
    }

    /**
     * 
     * This function used get the assigned Side of the shape that will be drawn
     *
     * @return Float
     */
    function getSide() {
        return $this->side;
    }

    /**
     * 
     * This function used to define the Side of the shape that will be drawn
     *
     * @param Float $sideValue  Radius of the shape
     */
    function setSide($sideValue) {
        $this->side = $sideValue;
    }

    /**
     * This function is used to draw the Square (Not Real Implementation), it's overridden from the parent class
     *
     * @return Array
     */
    function draw() {

        return array("points" => array("X" => $this->getX(), "Y" => $this->getY(), "Side" => $this->getSide()),
            "attributes" => $this->getShapeAttributes()
        );
    }

}
