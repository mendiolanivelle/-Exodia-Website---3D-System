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
    <title>Exodia_projects_Task
    </title>
</head>


<body onload="realtimeClock()">
    <img class="Exodia_Logo" src = "Images/Exodia_Logo.png" alt="" >

    <div class="Time" id = "Time">
    </div>
  
    <div class="container Taskheader">
            <div class="row TASKS justify-content-around" >
                <div class="col-md-6 TASKS">
               TASK
                </div>
                <div class="col-md-6  SUBMITYOUR">
                SUBMIT YOUR OUTPUT HERE FOR QA
             </div>
    </div>

    <div class="Taskrow">
      <div class="row TASKS justify-content-around" >
            <div class="col-md-6 Taskname">
               TASKNAME
               <img class="Taskimage" src = "Images/Alexis.png" alt="" >
                </div>
                
                <div class="col-md-6 UPLOAD">
                     <form action="/action_page.php">
                        <label for="img">Upload Image :</label>
                        <input type="file" id="img" name="img" accept="image/*">   
                        <textarea class="Qbox" name="w3review" rows="4" cols="55">PUT YOUR CONCERNS AND QUESTIONS HERE </textarea>      
                        <br></br>         
                     </form>

                     <input class="Submit" type="submit" value="SUBMIT" >
            </div>
      </div>
    </div>
    

    <div class="container Taskfield">

    </div>

</body>
</html>

<style>

</style>