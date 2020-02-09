
<?php
include("config.php");
$tbl_stdinfo="CREATE TABEL IF NOT EXISTS std_info(
s_id INT (11) NOT NULL,
PRIMARY KEY (s_id),
name VARCHAR (20) NOT NULL,
email VARCHAR (20) NOT NULL,
uname VARCHAR  (10) NOT NULL,
password VARCHAR (20) NOT NULL
)";
$result1="mysqli_query($myconnect,$tbl_stdinfo)";
if($result===TRUE)
{ 
echo"student information tabel created  ";
}
else{
echo"student information tabel not  created  ";
}
?>