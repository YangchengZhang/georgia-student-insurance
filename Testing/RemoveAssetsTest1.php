<?php
  class RemoveassetsTest extends \PHPUnit_Framework_TestCase
  {
     public fuction testRemoveassetswhenNoAssets()
	 {
       include_once 'dbh.inc.php';
	   $assetID = "1244";
   $sql = "SELECT * FROM asset WHERE AssetID='$assetID'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck < 1) {
      header("Location: ../assets.php?error=not_found");
   exit();}
   }
  }