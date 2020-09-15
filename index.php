<?php
include_once 'include/DBconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/Time.js"> </script>
    <title>Exodia_Worker_landingpage
    </title>
</head>
<body onload="realtimeClock()">
   
    <img class="Exodia_Logo" src="images/Exodia_Logo.png" alt=>

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
            <a href="#" class="button">INITIALIZE</a>
    </div>
   

   
</body>
</html>

<style>
.Exodia_Logo
    {
    position :absolute;
    left:3%;
    top:3%;
    }
.Time{
    Font-family:HelveticaNeue;
    font-weight:300;
    font-size:72px;
    position :absolute;
    right:3%;
    top:3%;

}    
.Black_Background
    {
    position: absolute;
    top:23%;
    left:0%;
    background-color:black;
    width:100%;    
    height:55%;
    
    }    
.EXODIA{
    Font-family:HelveticaNeue;
    font-weight:300;
    letter-spacing:12px; 
    padding-top:3%;
    text-align:center;
    Font-size:72px;
    Color:white;
}   
.QUOTES{
    Font-family:HelveticaNeue;
    font-weight:500; 
    padding-top:3%;
    text-align:center;
    Font-size:36px;
    Color:white;
}
.button {
    Text-align:center;
    position:absolute;
    left:43%;
    top:65%;
    Font-family:HelveticaNeue;
    font-weight:600;
    font-size:25px;  
    border-radius: 40px;
    background-color: white;
    border: none;
    color: black;
    padding: 15px ;
    padding-left:40px;
    padding-right:40px;
    text-decoration: none;
    
    cursor: pointer;
}



</style>