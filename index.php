<?php include('server.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Simple Weather Scraper</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <nav class="container">
            <nav class="row">
                <h1 class="display-3"><span style="font-weight: bold;">Today's Weather</span></h1>
                <form>
                    <nav class="mb-3">
                        <label for="city" class="form-label"><p class="lead"><span style="font-weight: bold;">Enter the name of a city in the box below.</span></p></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="e.g., New York, London, Los Angeles, etc.">
                    </nav>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <p class="lead" id="weather"><span style="font-weight: bold;"><?php echo $weatherInfo.$errorMessage; ?></span></p>
            </nav>
        </nav>
        <!-- Optional JavaScript; choose one of the two! -->
        <!--
        <!- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <!--
        <!-Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        -->
    </body>
</html>
