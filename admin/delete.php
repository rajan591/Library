<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$code=$_GET['id3'];



$sql="delete from LMS.bookcode WHERE code='$code'";

if($conn->query($sql) === TRUE)
{
	$sql3="update LMS.book set Availability=Availability-1 where BookId='$bookid'";
$result=$conn->query($sql3);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=book.php", true, 303);

}
else{
	echo "<script type='text/javascript'>alert('Error')</script>";
 header( "Refresh:0.01; url=book.php", true, 303);

}

?>
