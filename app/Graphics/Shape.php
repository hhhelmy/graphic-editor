<?php

namespace App\Graphics;

/**
 * Shape Class. This class contains the attributes for shapes and function to be inherited and implemented in the child shape classes
 * 
 * 
 * 
 * @author   Hatem Hassan <hatem.hassan@gmail.com>
 */
abstract class Shape {

    private $x;
    private $y;
    private $color;
    private $borderSize;

    /**
     * 
     * This function is the class shape constructor which initialize the x,y and other parameters for the shape
     *
     *  @param Float $x  X-Axis of the shape to be drawn from
     *  @param Float $y  Y-Axis of the shape to be drawn from
     *  @param Array $otherParams  Array of other parameters of the shape
     */
    function __construct($x, $y, $otherParams) {
        $this->shapeCoordinates($x, $y);
        $this->setShapeAttributes($otherParams);
    }

    /**
     * 
     * This function used get the assigned X-Axis of the shape to be drawn from
     *
     * @return Float
     */
    function getX() {
        return $this->x;
    }

    /**
     * 
     * This function used get the assigned Y-Axis of the shape  to be drawn from
     *
     * @return Float
     */
    function getY() {
        return $this->y;
    }

    /**
     * 
     * This function used to define the X-Axis of the shape  to be drawn from
     *
     * @param Float $newx  X-Axis of the shape
     */
    function setX($newx) {
        $this->x = $newx;
    }

    /**
     * 
     * This function used to define the Y-Axis of the shape  to be drawn from
     *
     * @param Float $newy  Y-Axis of the shape
     */
    function setY($newy) {
        $this->y = $newy;
    }

    /**
     * 
     * This function used to get the assigned color of the shape that will be drawn
     *
     * @return String
     */
    function getColor() {
        return $this->color;
    }

    /**
     * 
     * This function used to get the assigned border size of the shape that will be drawn
     *
     * @return Integer
     */
    function getBorderSize() {
        return $this->borderSize;
    }

    /**
     * 
     * This function used to define the color of the shape that will be drawn
     *
     * @param String $colorValue  Color of the shape
     */
    function setColor($colorValue) {
        $this->color = $colorValue;
    }

    /**
     * 
     * This function used to define the border size of the shape that will be drawn
     *
     * @param Integer $borderSizeValue  Border size of the shape
     */
    function setBorderSize($borderSizeValue) {
        $this->borderSize = $borderSizeValue;
    }

    /**
     * 
     * This function used to define the coordinates of the shape that will be drawn
     *
     * @param Float $x  X-Axis of the shape
     * @param Float $y  Y-Axis of the shape
     */
    function shapeCoordinates($x, $y) {
        $this->setX($x);
        $this->setY($y);
    }

    /**
     * 
     * This function used to set optional shape attributes
     *
     * @param Array $otherParams  Array of optional parameters of the shape
     */
    function setShapeAttributes($otherParams) {

        isset($otherParams["color"]) ? $this->setColor($otherParams["color"]) : $this->setColor(NULL);
        isset($otherParams["borderSize"]) ? $this->setBorderSize($otherParams["borderSize"]) : $this->setBorderSize(NULL);
    }

    /**
     * This function is used to draw shapes, it's implementation will be defined in its child class as it will be override there
     *
     *
     */
    abstract public function draw();

    /**
     * This function is used to return current shape object attributes 
     *
     * @return array of the shape attributes
     */
    function getShapeAttributes() {
        return array(
            "color" => $this->getColor(),
            "borderSize" => $this->getBorderSize()
        );
    }

}
