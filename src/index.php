<?php
    include_once "classes/jukebox.class.php";
    $jukebox = new CoffeeJukebox("Coffee jukebox", "Offers coffee almost for free!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://img.icons8.com/dusk/64/000000/coffee.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Coffee Jukebox</title>
</head>
<body class="container">
    <div class="mt-5 text-center">
        <div class="display-4"><?php echo $jukebox->name ?></div>
        <p class="text-muted"><?php echo $jukebox->description ?></p>
    </div>
    <form action="/" class="mb-4" method="get">
        <div class="input-group">
            <input type="text" class="form-control" name="product" placeholder="What product do you want?" 
            aria-label="product name" />
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <h1 class="text-muted mb-3">Logs</h1>
    <?php
        if(!$_GET["product"])
            exit();

        echo $jukebox->getOrder($_GET["product"]);
    ?>
</body>
</html>