<?php
     
    
     include_once('dbconn.php'); 
    
     
     
  
       if (isset($_POST['add'])) {
       
       $ctid = $_POST['ctid'];

     $pname = $_POST['pname'];
     $MRP = $_POST['MRP'];
     $pprice = $_POST['pprice'];
     $pdescrip = $_POST['pdescrip'];
     $ppics = $_POST['ppics'];
    
    echo($ctid.$pname.$MRP.$pprice.$pdescrip.$ppics);

   
   
   $sql =" INSERT INTO product( `ctid`,`pname`,`pprice`,`pdescrip`,`ppics`,`MRP`) VALUES ('".$ctid."','".$pname."','".$pprice."','".$pdescrip."','".$ppics."','".$MRP."')";

    
  
      $result = mysqli_query($cann, $sql);
     if($result){
      ?>
      <script type="text/javascript">
        alert("data insert properly");
      </script>
      <?php 
      }else{
       ?>
       <script type="text/javascript">
           alert("data not inserted");
       </script>

       <?php  
    
}


}

?>