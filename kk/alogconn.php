<?php
    include ('dbconn.php');

      if (isset($_POST['login'])) {

        $username = $_POST['username'];
        //$password = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE username='".$username."' and password='".$password."' limit 1";
        
        $result  = mysqli_query($cann, $sql);

       $c= mysqli_num_rows($result);
       if ($c==1) {
       	?>
         <script type="text/javascript">
           
          window.location = "adminnav.php";

       </script>

       <?php
              }

        else{
                   ?>
                   <script type="text/javascript">
                    function myfunction(){
           alert("Please enter correct username and password");
           
       }
       </script>
           <?php
                   exit();
        }
   
                   
                }


?>