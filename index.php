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
    <title>Exodia_Worker_landingpage
    </title>
</head>
<body onload="realtimeClock()">
   
    <img class="Exodia_Logo" src = "Images/Exodia_Logo.png" alt="" >

    <div class="Time" id = "Time">
    </div>

    <div class="Black_Background">
            <div class="EXODIA">EXODIA
            </div>  
            <?php
                $sql = "SELECT * FROM banner;";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);
                $QoutesData = array();

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        array_push($QoutesData,$row['banner_name']);
                    }

                    echo '<div class="QUOTES">';
                    echo $QoutesData[rand(0,count($QoutesData) - 1)];
                    echo '</div> ';
                }
                
            ?>
            
            </div>  
            <a href="Exodia_projects.php" class="button">INITIALIZE</a>
    </div>
   

   
</body>
</html>

<style>

</style>