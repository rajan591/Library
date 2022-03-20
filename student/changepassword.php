<?php
ob_start();
require('dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patan E-Library</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <style>
                .myclass{
               
                    padding: 200px;
                    padding-left:500px;
                    width: 500px;
                  
                }
            </style>
    </head>
    <body>
       
      
                    <!--/.span3-->
                    <div class="myclass">
                        <div class="module">
                            <div class="module-head">
                                <h2>Please change your Password</h2>
                            </div>
                            <div class="module-body">


                                <?php
                                $rollno = $_SESSION['RollNo'];
                                $sql="select Password from LMS.user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                              
                                $pswd=$row['Password'];
                                ?>    
                    			
                                <form class="form-horizontal row-fluid" action="changepassword.php?id=<?php echo $rollno ?>" method="post">

                               

                                    <div class="control-group">
                                        <label class="control-label" for="Password"><b>New Password:</b></label>
                                        <div class="controls">
                                            <input type="password" id="Password" name="Password"  value= "<?php echo $pswd?>" class="span8" required>
                                        </div>
                                    </div>   

                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn-primary"><center>Change Password</center></button>
                                            </div>
                                        </div>                                                                     

                                </form>
                    		           
                        </div>
                        </div> 	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<div class="footer">
          
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

<?php
if(isset($_POST['submit']))
{
    $rollno = $_GET['id'];

    $pswd=$_POST['Password'];

$sql1="update LMS.user set Password='$pswd' where RollNo='$rollno'";



if($conn->query($sql1) === TRUE){
  
echo "<script type='text/javascript'>alert('Success')</script>";
$sql5="update LMS.user set status = 1 where RollNo='$rollno'";


  $result=$conn->query($sql5);
echo $sql5;

header( "Refresh:0.01; url=index.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>
      
    </body>

</html>