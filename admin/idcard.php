<?php
require('dbconn.php');
$email=$_GET['email'];
?>
<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patan Library</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <style type="text/css">
table, table tr td {
    width: 390px;
    margin: 0 auto;
    border: 5px solid #e1e1e1;
    text-align: center;
}

</style>
          
          
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Patan Library </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/profile.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                                <li><a href="report.php"><i class="menu-icon icon-list"></i>Report </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                   
                     <input type="button" value="print" onclick="PrintDiv();" />                            

             





<div id="divToPrint" >
    
        <center><img src="images/tu.png" alt=""  width="80" height="80"></center>

   
    <center><h1 sttle="color:green">Patan Multiple Campus</h1>
        <h3>Library Department</h3></center>
  <div >
                 <div class="span9">
                    
                    <?php
                                // $rollno = $_SESSION['RollNo'];
                                $sql="select * from LMS.user where EmailId like '%$email%' ";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $id=$row['RollNo'];
                                $name=$row['Name'];
                                $category=$row['Category'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                $pswd=$row['Password'];
                                ?>  
                
                                                 
                                    <br>
                                    <center>
                      <table>
            <tr>
                <td><strong>Library ID</strong></td>
                <td><?php echo $id ?></td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td><strong>Email ID</strong></td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td><strong>Department</strong></td>
                <td><?php echo $category ?></td>
            </tr>
            <tr>
                <td><strong>Contact</strong></td>
                <td><?php echo $mobno ?></td>
            </tr>
        </table><br>
        <br><br>
        <br>
                 <table>
            <tr>
                <td><strong>ID for Login</strong></td>
                <td><?php echo $id ?></td>
            </tr>
             <tr>
                <td><strong>Password</strong></td>
                <td><?php echo $pswd ?></td>
            </tr>
            <p>NOTE: Donot forget to change your password</p>
        </table>
                            </center> 
                            </div>
                    <!--/.span9-->
                </div>
            </div>


  </div>
</div>
<div>



</div>
            <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2012 Patan Library Management System </b>All rights reserved.
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
                    
            <script type="text/javascript">   

    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=1500,height=1500');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
      
    </body>

</html>


<?php }
else {
     require('901kli4589.php');
    //echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>