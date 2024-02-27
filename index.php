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
    <div class="controller d-flex" style="justify-content: space-around; margin-top:25px">

        <div class="controller">
            <?php include('./from.php') ?>
        </div>
        <table class="table w-50 table-bordered border border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">vedio</th>
                    <th scope="col">avdio</th>
                    <th scope="col">vedio</th>
                    <th scope="col">vedio</th>

                </tr>
            </thead>
            <?php include('./table.php') ?>
        </table>

    </div>
    <div class="box">  </div>
    <div class="bo1"></div>
    <style>
        body{
            background-color: rgba(255, 255, 128, .5);
        }
    .box{
    width: 100px;
    height: 100px;
    margin: 0 auto;
    margin-top: 65px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.7),inset 0 0 20px rgba(255, 255, 255, 0.7);
    animation: identifier 4s linear alternate infinite;
    background-image: url('photo_2024-01-26_03-47-59.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    border-radius: 50%;


}
@keyframes identifier {
    from{
        transform: rotate(60);
    }
    to{
        transform: rotate(360deg);
    }
}
    </style>
        
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>