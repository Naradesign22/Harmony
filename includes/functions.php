<?php

function connect()
{
    $con = mysqli_connect("localhost", "negarbay_design", "h}RM78OYS4S-", "negarbay_harmony");
    return $con; 
}
function getData($sql)
{
    $con = connect(); 
    $result = mysqli_query($con, $sql);
    return $result;
}
function saveData($sql)
{
  $con = connect();
  mysqli_query($con, $sql);
}

function deleteData($table, $id)
{
  $con = connect(); 
  mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
}

function showData($result, $arrFields)
{
   while($arrData = mysqli_fetch_assoc($result))
    {
    ?>
      <div class="trow row">
        <?php
        foreach($arrFields as $fieldName)
        {?>
            <div><?=$arrData[$fieldName]?></div>
        <?php 
        }?>
        <div><a href="delete.php?id=<?=$arrData["id"]?>">Delete</a></div>
      </div>
    <?php
    }
}

function showTableHeader($arrFields)
{
    ?>
    <div class="thead row">

    <?php
    foreach($arrFields as $fieldName)
    {?>
        <div class="chead"><?=$fieldName?></div>
    <?php 
    }?>  
      <div class="chead">Delete</div>
    </div>
  <?php
}

?>