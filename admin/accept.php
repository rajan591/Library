<?php
require('dbconn.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];
echo $rollno ;
$code=$_GET['id3'];



$sql="select Category from LMS.user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$category=$row['Category'];





{$sql1="update LMS.record set Date_of_Issue=curdate(),Due_Date=date_add(curdate(),interval 15 day),Renewals_left=1, code='$code' where BookId='$bookid' and RollNo='$rollno'";
 echo $sql1;
if($conn->query($sql1) === TRUE)
{$sql3="update LMS.book set Availability=Availability-1 where BookId='$bookid'";
$result=$conn->query($sql3);
    $newsql="update LMS.user set limits=limits-1 where RollNo='$rollno'";
    echo $newsql;
 
  $result=$conn->query($newsql);

 $sql5="insert into LMS.message (RollNo,Msg,Date,Time) values ('$rollno','Your request for issue of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
  $sql6="DELETE FROM bookcode WHERE  code='$code'";
 $result=$conn->query($sql6);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=issue_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=issue_requests.php", true, 303);

}
}
