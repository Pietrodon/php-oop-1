<?php

class Movie {
    public $name;
    public $year;
    public $actor;

    function __construct( string $name, int $year, string $actor){
        $this->name =$name;
        $this->year =$year;
        $this->actor =$actor;

    }
}

$bond = new Movie ("007",2020,"Daniel Craig");

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
        Il titolo del film è  <?php echo $bond->name ?>
    </h1>
    <ul>
        <li>
            L'anno di uscita del film è <?php echo $bond->year ?>
        </li>
        <li>
            L'attore protagonista è  <?php echo $bond->actor ?>
        </li>
    </ul>
</body>
</html>