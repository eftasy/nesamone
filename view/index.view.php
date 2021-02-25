<?php
    use OOP\boss;
    use OOP\programmer;
    use OOP\tester;
    use OOP\Render;
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>darbas</title>
</head>
<body>
    <?php
    $boss = new boss('Jhonas', 'Jhonas@dump.co.uk', 'vif');
    $boss->addLocation('Lenkija');

    $programuotojas = new programmer('finder', 'vif@finder.eu.com');
    $programuotojas->addLocation('England');
    $programuotojas->setSalary(69.420);

    $testeris = new tester('kifnis','kifnis@yahoo.ru');
    $testeris->addLocation('Japan');
    $testeris->setSalary(89);
    $testeris->addTask('Clean up code');
    $testeris->addTask('Clean the dishes');

    Render::PrintInfo($boss->getInfo());
    Render::PrintInfo($programuotojas->getInfo());
    Render::PrintInfo($testeris->getInfo());
    ?>
</body>
</html>