<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title>Hello World php</title>
    </head>
    <body> 
        <p><?php echo "Hello World"; ?></p>
        <p><?php
        $currentMonth = date('F');

        if ($currentMonth == 'August') {
            echo "It's August, so it's really hot.";
        } else {
            echo "Not August, so at least not in the peak of the heat.";
        }
        ?></p>
        
        <p><?php
        function calculateRectangleArea($width, $height) {
            $area = $width * $height;
            return "A rectangle of width $width and height $height has an area of $area.";
        }
        
        echo calculateRectangleArea(5, 10);
        echo "<br>";
        echo calculateRectangleArea(7.5, 4);
        echo "<br>";
        echo calculateRectangleArea(12, 8);
        ?></p>
        
    </body>


</html>

