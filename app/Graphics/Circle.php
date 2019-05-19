<?php

namespace App\Graphics;

/**
 * Circle Class. This class contains the attributes and implementation of the Circle Shape
 * 
 * @author   Hatem Hassan <hatem.hassan@gmail.com>
 */
class Circle extends Shape {

    private $radius;

    /**
     * 
     * This function is the class Circle constructor which initialize the x,y , radius and other parameters for the Circle
     *
     *  @param Float $x  X-Axis of the shape to be drawn from
     *  @param Float $y  Y-Axis of the shape to be drawn from
     * @param Float $radiusVal  Radius of the shape
     *  @param Array $otherParams  Array of other parameters of the shape
     */
    function __construct($x, $y, $radiusVal, $otherParams) {
        parent::__construct($x, $y, $otherParams); // Call the parent Shape class Constructor to initialize the Coordinates of the shape that will be drawn
        $this->setRadius($radiusVal);
    }

    /**
     * 
     * This function used get the assigned radius of the shape that will be drawn
     *
     * @return Float
     */
    function getRadius() {
        return $this->radius;
    }

    /**
     * 
     * This function used to define the radius of the shape that will be drawn
     *
     * @param Float $radiusValue  Radius of the shape
     */
    function setRadius($radiusValue) {
        $this->radius = $radiusValue;
    }

    /**
     * This function is used to draw the Circle (Not Real Implementation), it's overridden from the parent class
     *
     * @return Array
     */
    function draw() {

        return array(
            "points" => array("X" => $this->getX(), "Y" => $this->getY(), "Radius" => $this->getRadius()),
            "attributes" => $this->getShapeAttributes()
        );
    }

}
