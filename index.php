<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start()
    ?>

    <div class="controller controllerBox">
        <?php include('./from.php') ?>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Video</th>
                <th scope="col">Audio</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Countr</th>
                <th scope="col">Province</th>
                <th scope="col">Description</th>
               

            </tr>
        </thead>
        <?php include('./table.php') ?>

       
    </table>
   
    <div class="box"> </div>
    <div class="bo1"></div>
    <style>
        body {
            /* background-color: rgba(255, 255, 128, .5); */
            padding: 20px;
        }
      

        @keyframes identifier {
            from {
                transform: rotate(60);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>