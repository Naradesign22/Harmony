<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Harmony/Contact</title>
    
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slider2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    
<?php include("includes/header.php");?>
<?php include("includes/functions.php");?>

            <div class="container">
             <div class="row">
             <div class="contactHead  twelve columns">
             <h2>Register Today
Now Selling!</h2>
             <p>Fill out the form below with your information and we would be happy to get back to you at the soonest.</p>
             </div>
             </div>
            </div>
           <div class="container formsheet">
           <div class="row">
            <div class="card six columns">
            <h3>Harmony Luxury Condominium </h3>
            <h4>Four Units in North Vancouver</h4>
            <p>Email: Condo@Harmony.com</p>
            <p>3536 North Van Street</p>
            <p>Vancouver,BC</p>
           </div>    

           <div class="contForm six columns">
            <form name="myForm" method="post" action="save.php">
            <a href="#"><h4>You need help?</h4></a>
            <input type="text" name="strName" placeholder="Name" value="" required/><br/><br/>
            <input type="text" name="strEmail" placeholder="Email" value="" required/><br/><br/>
            <select name="strPackages" required>
              <option value="Service Required">Standard Condominium</option>
              <option value="Wedding Photography">Common Elements</option>
              <option value="Portrait Photography">Vacant Land Condominiums</option>
              <option value="Family Photography">Pent House</option>
             </select>  
             <br/><br/>
            
            <input id="sav" type="submit" value="SEND">
          </form>
        </div>
      </div>
    </div>

<?php include("includes/footer.php");?>

</body>
</html>