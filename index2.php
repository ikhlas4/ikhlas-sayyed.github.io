
<?php






?>



<html lang="en">
<head>
 
  <title>ikhlas</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 
  <link rel="stylesheet" href="style.css">
 
 <style>
   *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
   }
 </style>
 
 
</head>

 
<body id="body">
  
    <!--navbar-->
    <?php echo'
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">'.$username.'</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">contact</a>
      </li>
     
     
     
      
    </ul>
   
  </div>
</nav>

<!--slider-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="A.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="AB.jpg" alt="Second slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="v.jpg" alt="Third slide" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
<!--WhatsApp-->

<div>
  <a href="https://wa.me/919921838422" class="btn "><img src="" alt="" height="60" width="60"/></a>
</div>

<!--body-->

 <div id="body_div">
   
   <div>
     <h1>HTML Website</h1>
   </div>
   <div>
     <br><br>
     <img src="W1.png" alt="" height="300" width="300" style="border-radius: 10px;"/>
     <br>
     price 25$
     
    <br><br>
       
       <div id="d">
         <a href="mailto: isoffcial21@gmail.com" class="btn " id="">Email</a>
       </div>
  
 <div>
  
  
 </div>
<!--prat2-->
<br><br><br><br>

 <div id="body_div">
   
   <div>
     <h1>bootstrap Website</h1>
   </div>
   <div>
     <br><br>
     <img src="W2.png" alt="" height="300" width="300" style="border-radius: 10px;"/>
     <br>
     price 20$
  <br><br>
  
  <div id="d">
    <a href="mailto: isoffcial21@gmail.com" class="btn " id="">Email</a>
  </div>
  
 <div>
  
  
 </div>
 
 <!--prat3-->
 <br><br><br><br>
  
  <!--scropt-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
'
?>
</body>
</html>
  