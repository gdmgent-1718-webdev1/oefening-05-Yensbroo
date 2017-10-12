<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function loopAge() 
    {
        $ages = [10, 17, 14, 19, 20, 40, 13, 16];

        foreach ($ages as $age) {
            if ($age < 16) {
                echo "${age} is te jong voor deze film<br>" . PHP_EOL;
            } 
            elseif ($age >=16 && $age < 18) {
                echo "${age} heeft ouderlijk toezicht nodig<br>" . PHP_EOL;
            } else {
                echo "Je bent al ${age} jaar. Geniet van de film<br>" . PHP_EOL;
            }
        }
    }
    echo loopAge();
    ?>
</body>
</html>