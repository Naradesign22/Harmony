<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Harmony/Units</title>
    
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <script type="text/javascript" src="js/gallery.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/functions.php");?>

  <div class="container">
  <div id="wedding twelve colunms">
  <div class="galHead"> 
    <h2>Units</h2>
  </div>
  
      <div class="row weds twelve columns">
              <?php
              $result = getData("SELECT * FROM photos WHERE nCategoriesId = '1'");
              while($arrRow = mysqli_fetch_assoc($result)){
                ?>
      <div class="photo four columns u-ml-0">
        <a href="#" path="imgs/<?=$arrRow['strName']?>" class="openModal">
        <img src="imgs/<?=$arrRow['strName']?>" alt="<?=$arrRow['strAlt']?>">
        </a>
        </div>
      
      <div id="modalContainer">
      
      <div id="modal">
      <a href="#" class="closeIcon" id="closeModal">
      <i class="fas fa-times"></i>
      </a>
        <img src="" id="modalImage"/>
      <a href="unit.php" class="closeIcon" id="closeModal">
      <i class="fas fa-times"></i>
      </a>

        <img src="" id="modalImage"/>
      </div>
      </div>
                <?php
              }?>
      </div>
      </div>

      <div id="portrait twelve colunms">
      <div class="galHead"> 
        <h2>Plans Of Units</h2>
      </div>
      
      <div class="row ports twelve columns">
              <?php
              $result = getData("SELECT * FROM photos WHERE nCategoriesId = '2'");
              while($arrRow = mysqli_fetch_assoc($result)){
                ?>
      <div class="photo four columns u-ml-0">
      <a href="#" path="imgs/<?=$arrRow['strName']?>" class="openModal">
        <img src="imgs/<?=$arrRow['strName']?>" alt="<?=$arrRow['strAlt']?>">
      </a>
      </div>
      
      <div id="modalContainer">
      <div id="modal">
        <a href="#" class="closeIcon" id="closeModal">
        <i class="fas fa-times"></i>
        </a>
        <img src="" id="modalImage"/>
         <a href="portfolio.php" class="closeIcon" id="closeModal">
         <i class="fas fa-times"></i>
         </a>

        <img src="" id="modalImage"/>
      </div>
      </div>
                <?php
              }?>
      </div>
      </div>

      <div id="fami twelve colunms">
      <div class="galHead"> 
        <h2>North Vancouver</h2>
      </div>
      
      <div class="row fami twelve columns">
              <?php
              $result = getData("SELECT * FROM photos WHERE nCategoriesId = '3'");
              while($arrRow = mysqli_fetch_assoc($result)){
                ?>
      <div class="photo four columns u-ml-0">
        <a href="#" path="imgs/<?=$arrRow['strName']?>" class="openModal">
        <img src="imgs/<?=$arrRow['strName']?>" alt="<?=$arrRow['strAlt']?>">
        </a>
      </div>
                  
      <div id="modalContainer">
      <div id="modal">
        <a href="#" class="closeIcon" id="closeModal">
        <i class="fas fa-times"></i>
        </a>
          <img src="" id="modalImage"/>
          <a href="unit.php" class="closeIcon" id="closeModal">
          <i class="fas fa-times"></i>
          </a>

        <img src="" id="modalImage"/>
      </div>
      </div>
                <?php
              }?>
      </div>
      </div>
      </div>

  <div class="container">
  <div class="row cta twelve columns">
    <a href="contact.php" class="button">Contact Us</a>
  </div>
  </div>

    <?php include("includes/footer.php");?>
    <script type="text/javascript" src="js/modal.js"></script>
    
</body>
</html>