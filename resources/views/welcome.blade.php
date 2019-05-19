<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graphics Editor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links input[type='submit'] {
                color: #636b6f;
                padding: 0 25px;
                margin-bottom: 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    Graphics Editor
                </div>

                <div class="links">
                    <form action="api/drawCircle" method="post">
                        <input type="hidden" name="x" value="1" />
                        <input type="hidden" name="y" value="2" />
                        <input type="hidden" name="radius" value="25" />
                        <input type="hidden" name="color" value="Yellow" />
                        <input type="hidden" name="borderSize" value="2" />
                        <input type="submit" value="Draw Circle API Call" />
                    </form>
                    <form action="api/drawRectangle" method="post">
                        <input type="hidden" name="x" value="3" />
                        <input type="hidden" name="y" value="4" />
                        <input type="hidden" name="width" value="5" />
                        <input type="hidden" name="height" value="6" />
                        <input type="hidden" name="color" value="Green" />
                        <input type="hidden" name="borderSize" value="1" />
                        <input type="submit" value="Draw Rectangle API Call" />
                    </form>
                <form action="api/drawSquare" method="post">
                        <input type="hidden" name="x" value="5" />
                        <input type="hidden" name="y" value="6" />
                        <input type="hidden" name="side" value="7" />
                        <input type="hidden" name="color" value="Blue" />
                        <input type="hidden" name="borderSize" value="1.5" />
                        <input type="submit" value="Draw Square API Call" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
