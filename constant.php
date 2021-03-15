<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= NAME?>
</body>
</html>
<?php
    define('NAME', 'Anderson');

    //Can be defined using word define, this is similar to Javascript.

    const USERNAME = 'anderson';

    echo NAME;

     // NAME = 'Daniel'; // will print error because NAME cant change.;
?>