<?php

  include 'func.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/stream.css">
    <title>myFlix</title>
  </head>
  <body>
    <style>
      .my-custom-row{
        height: 600px;
      }
      .my-custom-back{
        background-color: rgb(32, 6, 6);
        height: 100vh;
      }
      .my-custom-slider{
        background-color: rgb(32, 6, 6);
        height: 100px;
        width: 100px;
      }
    </style>
    
    <div class="my-custom-back">
      <div class="row justify-content-between align-items-start">
        <div class="col-sm-8">
          <img src="images/background images/myflix.jpg" >
        </div>
        <div class="col-sm-2">
          <div class="p-5">
            <button type="button" class="btn btn-danger" onclick="window.location.href='file:///C:/UOD_september/devops/html/Netflix_mytemplate/index.html'">Sing out</button>
          </div> 
        </div>
        
      </div>
      <div class="row ">
        <div class="col-sm-12">
            <img src="images/top-10/01.jpg" class="img-responsive">
        </div>
      </div>
      
      <div class="read-more-container">
        <div class="container">
            <p>
                Kevin Hart and Ice Cube lead the returning lineup of Ride Along 2, the sequel to the blockbuster action-comedy that gave us the year’s 
                most popular comedy duo. Joining Hart and Cube for the next chapter of the series are director Tim Story,
                as well as Cube’s fellow producers—Will Packer, Matt Alvarez and Larry Brezner—who will produce alongside Cube.<br>
                <span class="read-more-text"> 
                    Rider along<br>asldjhgf<br>SJgd
                </span>
            </p>
            <span class="read-more-btn">Read More</span>

        </div>

      </div>
      <div class="row justify-content-center align-items-start gx-1">
        <div class="col-sm-12">
            <p class="fs-5 text-white bg-dark">Recommended for you</p>
        </div>
      </div>
      
      <div class="row">
      <?php
        $mongoViewvideo = mongoViewvideos();
        //  print_r($mongoViewvideo);
        foreach($mongoViewvideo as $docs){
          $_id =  $docs->_id;
          $id = $docs->id;
          $mv_name = $docs->mv_name;
          $desctribtion =  $docs->desctribtion;
          $category =  $docs->category;
          $mv_length =  $docs->mv_length;
          $director =  $docs->director;
          $year = $docs->year;
          $mrating = $docs->mrating;
  
      ?>
        <div class="col-sm-4">
            <h4><?php echo $mv_name;?></h4>
        </div>
        <div class="col-sm-4">
            <video controls src="video\<?php echo $id.".mp4";?>" width="400px"></video>
        </div>
        <?php
        }
      ?>
      </div>
      
      
      
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="C:/UOD_september/devops/html/Netflix_mytemplate/js/myscript.js"></script>
  </body>
</html>