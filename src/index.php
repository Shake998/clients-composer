<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <a href="search.php"><h3>Anar al Buscador</h3></a>
    <?php
        require_once 'vendor/autoload.php';
        include 'DBconn.php';

        
        
        $conn = new DBconn();
        $conn = $conn->connect();
        $conn->query("DELETE FROM clients");
        //Here we create 1000 fake clients
        echo "Fake Client Data:<br>";
        echo "<br>";

        $fakerSeed = Faker\Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            echo $name = $fakerSeed->name, "<br>";
            echo $email = $fakerSeed->email, "<br>";
            echo $city = $fakerSeed->city, "<br>";
            echo $company = $fakerSeed->company, "<br>";
            $dateUnformated = $fakerSeed->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null);
            echo $date = $dateUnformated->format('Y-m-d'), "<br>";
            echo $sales = $fakerSeed->numberBetween($min = 0, $max = 10000), "<br>";
            echo "<br>";

           
            $conn->query('INSERT INTO clients VALUES ("' . $name . '", "' . $email . '", "' . $city . '", "' . $company . '", "' . $date . '", "' . $sales . '")');
            
            
        }
        

    ?>
    


</body>
</html>

