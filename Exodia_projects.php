<?php
include_once 'include/DBconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/Time.js"> </script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exodia_projects
    </title>
</head>


<body onload="realtimeClock()">
    <img class="Exodia_Logo" src = "Images/Exodia_Logo.png" alt="" >

    <div class="Time" id = "Time">
    </div>

    <div class="container WorkerRow">
        <div class="row">
           <a href="Exodia_projects_Task.php" style="text-decoration:none" class="col-md-3 Task">TASK
           </a>
           <a href="Exodia_projects_QualityAssurance.php" style="text-decoration:none" class="col-md-3 Quality">QUALITY ASSURANCE
           </a>
           <a href="Exodia_projects_Quantification.php" style="text-decoration:none" class="col-md-3 Quantification">QUANTIFICATION
           </a>
        
        </div>
    </div>

</body>
</html>

<style>

</style>