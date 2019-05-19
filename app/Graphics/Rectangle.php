<?php

namespace App\Graphics;

/**
 * Rectangle Class. This class contains the attributes and implementation of the Rectangle Shape
 * 
 * @author   Hatem Hassan <hatem.hassan@gmail.com>
 */
class Rectangle extends Shape {

    private $width;
    private $height;

    /**
     * 
     * This function is the class Rectangle constructor which initialize the x, y, width, height and other parameters for the Rectangle
     *
     *  @param Float $x  X-Axis of the shape to be drawn from
     *  @param Float $y  Y-Axis of the shape to be drawn from
     * @param Float $widthVal  Width of the shape
     * @param Float $heightVal  Height of the shape
     *  @param Array $otherParams  Array of other parameters of the shape
     */
    function __construct($x, $y, $widthVal, $heightVal, $otherParams) {
        parent::__construct($x, $y, $otherParams); // Call the parent Shape class Constructor to initialize the Coordinates of the shape that will be drawn
        $this->setWidth($widthVal);
        $this->setHeight($heightVal);
    }

    /**
     * 
     * This function used get the assigned Width of the shape that will be drawn
     *
     * @return Float
     */
    function getWidth() {
        return $this->width;
    }

    /**
     * 
     * This function used get the assigned Height of the shape that will be drawn
     *
     * @return Float
     */
    function getHeight() {
        return $this->height;
    }

    /**
     * 
     * This function used to define the Width of the shape that will be drawn
     *
     * @param Float $widthValue  Radius of the shape
     */
    function setWidth($widthValue) {
        $this->width = $widthValue;
    }

    /**
     * 
     * This function used to define the Height of the shape that will be drawn
     *
     * @param Float
     * 
     *  $heightValue  Radius of the shape
     */
    function setHeight($heightValue) {
        $this->height = $heightValue;
    }

    /**
     * This function is used to draw the Rectangle (Not Real Implementation), it's overridden from the parent class
     *
     * @return Array
     */
    function draw() {
        return array(
            "points" => array("X" => $this->getX(), "Y" => $this->getY(), "Width" => $this->getWidth(), "Height" => $this->getHeight()),
            "attributes" => $this->getShapeAttributes()
        );
    }

}
