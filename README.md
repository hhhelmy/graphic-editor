This application contains POST APIs used to draw Shapes like Circle, Square, Rectangle,...

You can add new shapes easily using the following steps:

1-Create a new shape class by going to app\Graphics then create the class

2-The class should extend Shape Class

3-Draw method should be implemented in the created class

4-Needed attributes for this shape should be defined and Setter/Getter for those attributes should also be defined in the created class

5-New shape routing should be created in routes\api.php file

6-To test this new created shape, you can add a new function with the shape name (ex: elipse ) in app\Http\Controllers\DrawShapeController.php as drawElipse with same implementation as other shapes. Only the newly created shape parameters should be changed in this new function.

7-You can use Postman to test this function by visiting this URL http://YOURHOST/graphic-editor/public/api/drawElipse and passing necessary parameters to it ( drawElipse is the newly created route name before in step 5).

To Test the currently implemented shapes, you can use on the following techniques

1-Testing each shape separately using Postman

To call any of the currently implemented shapes APIs (Square, Circle, Rectangle), call the below URL using Postman and pass necessary parameters (ex: x, y, ...):

-http://YOURHOST/graphic-editor/public/api/drawSquare

-http://YOURHOST/graphic-editor/public/api/drawCircle

-http://YOURHOST/graphic-editor/public/api/drawRectangle


2-Testing all shapes at one time (as the example provided in the task file) using Postman

Just call this URL http://YOURHOST/graphic-editor/public/api/drawAllShapes  with POST input  as below:

Shapes: [
{"type" : "circle", "params" : {"x" : 1, "y" : 2, "radius" : 12, "color" : "blue"}},
{"type" : "circle", "params" : {"x" : 3, "y" : 4, "radius" : 20, "color" : "red"}},
{"type" : "square", "params" : {"x" : 5, "y" : 6, "side" : 5, "borderSize" : "2"}}] 

3-Testing using application home page

Browse http://YOURHOST/graphic-editor/public , click on the available buttons to call the APIs for each shape

4-Testing using PHPUnit

You can run the created test cases using PHPUnit as below command (Navigate to root folder of project first):
php vendor/phpunit/phpunit/phpunit



This project developed using:

Programming Language: PHP 7.2.4

Framework: Laravel Framework 5.8.17

Unit Testing Framework: PHPUnit

IDE: Eclipse
