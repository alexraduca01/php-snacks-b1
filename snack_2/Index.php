<?php 

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="mb-3 w-50 m-auto mt-5">
            <!-- <form action="index.php" method="GET">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua mail">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome">
                <label for="age" class="form-label">Età</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Inserisci la tua età">
                <button class="mt-3 btn btn-success">Submit</button>
            </form> -->
            <?php 
            
            if(strlen($name) > 3 && strpos($email ,'.') && strpos($email ,'@') && is_numeric($age)) {
                echo "<p>Accesso Riuscito</p>";
            } else { ?>
                <form action="index.php" method="GET">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Inserisci la tua mail">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome">
                    <label for="age" class="form-label">Età</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Inserisci la tua età">
                    <button class="mt-3 btn btn-success">Submit</button>
                </form>
            <?php } ?>
        </div>
    </body>

</html>