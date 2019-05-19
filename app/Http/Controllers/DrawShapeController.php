<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Graphics;

/**
 * DrawShapesController
 * 
 * 
 * 
 * @author   Hatem Hassan <hatem.hassan@gmail.com>
 */
// This class is our service endpoint
class DrawShapeController extends Controller {

    /**
     * 
     * This function considered the endpoint of All shapes API which you can call to draw the all the shapes
     *
     * @param Request $request  Client Request to the API
     * 
     * @return Json
     */
    public function index(Request $request) {


        $shapes = is_string($request->input("shapes")) ? json_decode($request->input("shapes"), true) : $request->input("shapes");

        // This array holds the drawed shapes as JSON 
        $generatedShapes = array();

        foreach ($shapes as $shap) {

            switch ($shap['type']) {

                case "circle":
                    $circle = new Graphics\Circle($shap['params']['x'], $shap['params']['y'], $shap['params']['radius'], $shap['params']);
                    $generatedShapes[] = $circle->draw();
                    break;

                case "rectangle":
                    $rectangle = new Graphics\Rectangle($shap['params']['x'], $shap['params']['y'], $shap['params']['width'], $shap['params']['height'], $shap['params']);
                    $generatedShapes[] = $rectangle->draw();
                    break;

                case "square":
                    $square = new Graphics\Square($shap['params']['x'], $shap['params']['y'], $shap['params']['side'], $shap['params']);
                    $generatedShapes[] = $square->draw();
                    break;

                default:
                    $generatedShapes[] = array();
                    break;
            }
        }

        return json_encode($generatedShapes);
    }

    /**
     * 
     * This function considered the endpoint of the Circle API which you can call to draw the Circle only
     *
     * @param Request $request  Client Request to the API
     */
    public function drawCircle(Request $request) {

        $x = $request->input('x');
        $y = $request->input('y');
        $radius = $request->input('radius');
        $color = $request->input('color');
        $borderSize = $request->input('borderSize');

        $circle = new Graphics\Circle($x, $y, $radius, array("color" => $color, "borderSize" => $borderSize));
        return json_encode($circle->draw());
    }

    /**
     * 
     * This function considered the endpoint of the Rectangle API which you can call to draw the Rectangle only
     *
     * @param Request $request  Client Request to the API
     */
    public function drawRectangle(Request $request) {

        $x = $request->input('x');
        $y = $request->input('y');
        $width = $request->input('width');
        $height = $request->input('height');
        $color = $request->input('color');
        $borderSize = $request->input('borderSize');

        $rectangle = new Graphics\Rectangle($x, $y, $width, $height, array("color" => $color, "borderSize" => $borderSize));
        return json_encode($rectangle->draw());
    }

    /**
     * 
     * This function considered the endpoint of the Square API which you can call to draw the Square only
     *
     * @param Request $request  Client Request to the API
     */
    public function drawSquare(Request $request) {

        $x = $request->input('x');
        $y = $request->input('y');
        $side = $request->input('side');
        $color = $request->input('color');
        $borderSize = $request->input('borderSize');

        $square = new Graphics\Square($x, $y, $side, array("color" => $color, "borderSize" => $borderSize));
        return json_encode($square->draw());
    }

}
