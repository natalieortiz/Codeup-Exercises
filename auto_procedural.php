<?php

require_once 'Automobile.php';

function pageController()
{
    $data = [];

    // objects are state and behavior
    $ryanCar = new Automobile();
    $ryanCar->setupAutomobile('hyundai', 'sonata', 'Ryan');
    $ryanCar->speedUp(10);

    $danielCar = new Automobile();
    $danielCar->setupAutomobile('hyundai', 'sonata', 'Daniel');
    $danielCar->speedUp(20);

    $data['ryanCar'] = $ryanCar;
    $data['danielCar'] = $danielCar;
    return $data;
}


extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Welcome to Automobile Race, yay!</h1>
    <p><?php echo $ryanCar->speed; ?></p>
    <p><?php echo $danielCar->speed; ?></p>
    <p><?php echo $ryanCar->honk(); ?></p>
    <p><?php echo $danielCar->screetchingHalt(); ?> </p>

    <h2>Static Properties</h2>
    <p><?php echo Automobile::$numberOfEngines; ?></p>

</body>
</html>
