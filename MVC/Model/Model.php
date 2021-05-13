<?php
Class Model{

public function Model()

{

 $con = mysqli_connect("localhost","root","") or die('Not connected to Database
' );

 mysqli_select_db($con,"hienmau") or die("DB không tồn tại!");
 mysqli_query($con,"set names 'utf8'");
}

public function insert_data()

{

 if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['cmnd']) && isset($_POST['country']) && isset($_POST['mau']) && isset($_POST['thamgia'])) {

  $name = $_POST['name'];

  $year = $_POST['year'];

  $cmnd = $_POST['cmnd'];
  $country = $_POST['country'];
  $mau = $_POST['mau'];
  $thamgia = $_POST['thamgia'];

  $qry = "INSERT INTO userInfo (NULL,hoTen,namSinh,cmnd,queQuan,nhomMau,soLanHienMau) values('$name','$year','$cmnd','$country','$mau','$thamgia')";

//   $result = mysqli_query($qry);
$result = mysqli_query($con,$qry);

  if ($result) {

   return "Insert Data Successfully.";

  }

  else

  {

   return "Error...! Not Inserted.";

  }

 }

 else

 {

  return "";

 }

}

}

?>