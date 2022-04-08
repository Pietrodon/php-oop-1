<?php

class Movie {
    public $name;
    public $year;
    public $actor;
    public $time;

    function __construct( string $name, int $year, string $actor, int $time){
        $this->name =$name;
        $this->year =$year;
        $this->actor =$actor;
        $this->time=$time;
            
    }
}

$bond = new Movie ("007",2020,"Daniel Craig",163);
$morbius = new Movie ("Morbius",2022,"Jared Leto",108)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Il titolo del film è  <?php echo $bond->name ?>.
    </h1>
    <ul>
        <li>
            L'anno di uscita del film è <?php echo $bond->year ?>.
        </li>
        <li>
            L'attore protagonista è  <?php echo $bond->actor ?>.
        </li>
        <li>
            La durata del film è  <?php echo $bond->time ?> minuti.
        </li>
    </ul>


    <h1>
        Il titolo del film è  <?php echo $morbius->name ?>.
    </h1>
    <ul>
        <li>
            L'anno di uscita del film è <?php echo $morbius->year ?>.
        </li>
        <li>
            L'attore protagonista è  <?php echo $morbius->actor ?>.
        </li>
        <li>
            La durata del film è  <?php echo $morbius->time ?> minuti.
        </li>
    </ul>
</body>
</html>