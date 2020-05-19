<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <p></p>
    <h1>GET BY CLIENT</h1>
    <p>Prova "Okey Schultz"</p>
    
    <form action="apiClients.php" method="GET" class="form-inline mr-auto">
        <input class="form-control mr-sm-2" type="text" name="name" placeholder="Search" aria-label="Search">
        <button class="btn blue-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
    </form>
    <p></p>
    <h1>GET BY DATE</h1>
    <p>Prova "2000-01-01"</p>

    <form action="apiClients.php" method="GET" class="form-inline mr-auto">
        <input class="form-control mr-sm-2" type="text" name="date" placeholder="Search" aria-label="Search">
        <button class="btn blue-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
    </form>

    <h1>GET All</h1>
    <a href="apiClients.php">Show all clients</a>

    <?php


    ?>
</body>
</html>



    