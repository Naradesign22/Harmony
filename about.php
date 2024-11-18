

       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about us</title>
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("includes/header.php");?>

    <div class="container">
        <div class="heroAbout twelve columns">
            <img src="imgs/team.jpg" alt="photographer image">
        </div>
    </div>
    <div class="container">
        <div class="homeCont twelve columns">
            <h2>It’s what we all seek.Something special and distinct.</h2>
            <p>Since 1971, the master planning, architecture and interior design firm, The Architectural Team, Inc. (TAT), has been recognized for its thought leadership and diverse portfolio of acclaimed design solutions. The 95+ person firm has earned more than 100 awards for design excellence across a broad range of building types and programs, including new construction of large-scale urban mixed-use developments, multifamily, commercial, waterfront and hospitality developments, assisted and senior living facilities, and community centers.</p>
        </div>
    </div>

    <div class="container">
        <div class="inCont three columns">
            <?php
    $con =mysqli_connect("localhost", "negarbay_design", "h}RM78OYS4S-", "negarbay_harmony");

    $sql = "SELECT * FROM team";
    $results = mysqli_query ($con, $sql);
    while (
        $team =  mysqli_fetch_assoc($results))
    { ?>
            <div class="teams">
                <div class="team">
                    <img src='imgs/<?=$team["strImage"]?>' alt='<?=$team["strAlt"]?>'>
                </div>
                <div class="team">
                    <h3><?=$team["strName"]?></h3>
                </div>
                <div class="team">
                    <p><?=$team["strPosition"]?></p>
                </div>
            </div>
    <?php } ?>
        
        </div>


    
        <div class="cta twelve columns">
            
    </div>
    <?php include("includes/footer.php");?>
</body>
</html>
            

        </div>



    </div>
    
 

</body>
</html>