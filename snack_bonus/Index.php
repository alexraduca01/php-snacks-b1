<?php 
if(isset($_GET['param'])) {
    $param = $_GET['param'];
    $params = explode(',', $param);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack Bonus</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <form action="index.php" method="GET">
                <textarea name="param" id="param" cols="30" rows="10"></textarea>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        <div class="text-center">
            <?php 
            
                foreach($params as $value) {
                    echo "<p class='text-sucess'> $value </p>";
                }
            ?>
        </div>
    </body>

</html>