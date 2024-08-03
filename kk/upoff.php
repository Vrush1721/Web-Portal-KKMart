<?php

include_once('dbconn.php'); 
$slid=$_GET["slid"];

if(count($_POST)>0) {
mysqli_query($cann,"UPDATE slides set slid='" . $_POST['slid'] . "', pimg='" . $_POST['pimg'] . "' WHERE slid='" . $_POST['slid'] . "'");
?>
<script type="text/javascript">
    function myfunction(){
                alert("Record Modified Successfully");
                
  }
    window.location = "viewof.php";        

</script>
<?php
}
$result = mysqli_query($cann,"SELECT * FROM slides WHERE slid='".$_GET['slid']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
<style type="text/css">
#foot{
    padding-top: 190px;
}
.heading{
    display: none;
   }
    .frmuser{
        background-color: white;
        
        
        border: 3px solid black;
        box-sizing: border-box;
        width: 20%;
        height: 400px;
        text-align: center;
        padding: 40px;
    }
    .frmuser input{
        height: 30px;
        width: 200px;
    }
    .uph{
        font-size: 16px;
        font-weight: bold;
    }
    #adminh1{
          display: none;
   }
.buttom:hover{
  background-color: #ff4500;
  transform: translate(3px);
}

    @media only screen and  (max-width: 768px) {
        .frmuser{
            width: 60%;
        }
    }
</style>
</head>
<?php include_once("adminnav.php"); ?>
<body>
    <center style="padding-top: 5%;">
<button style="float:left; margin-left: 55%; width:60px; height: 30px;"><a href="viewof.php" class="btn btn-primary" style="font-size: 20px;">Back</a></button><br><br>

<form name="frmUser" method="post" action="" class="frmUser">

<p style="font-size:30px; color: black;">Update Offers</p>
<form name="frmUser" method="post" action="" class="frmUser">
<p style="padding-right: 80%;" class="uph">Cid</p>
<input type="hidden" name="slid" class="txtField" value="<?php echo $row['slid']; ?>">
<input type="text" name="slid"  value="<?php echo $row["slid"];?>">

<p style="padding-right: 55%;"class="uph">Image Name </p> 
<input type="file" name="pimg"  value="<?php echo $row['pimg']; ?>">

<br><br>
<input type="submit" name="submit" value="Submit" class="buttom" style="font-size: 23px;
  height: 40px;
   width: 150px;
   border: 3px solid  #ff4500;
   box-shadow: 0 9px #999;
   border-radius: 10px;" onclick="myfunction()">

</form>
</center>
</body>
</html>

<?php include('./footer/footer.php');?>
?>



