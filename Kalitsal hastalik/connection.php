<?php

$serverName = "LAPTOP-2LU6L662";
$database = "AnemiData";
$uid = "";
$pass="";


$connection = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
 ];

 $conn = sqlsrv_connect($serverName,$connection);
 if(!$conn)
  die(print_r(sqlsrv_errors(),true));


$conn = sqlsrv_connect($serverName,$connection);
 if(!$conn)
  die(print_r(sqlsrv_errors(),true));

  $tsql = "select * from AnemiaDataSetCSV";

  $stmt = sqlsrv_query($conn,$tsql);

  if($stmt == false){
     echo 'Error';

  }


  while($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    
     echo $obj['GENDER'].'</br>';
     echo $obj['RDW'].'</br>';
     echo $obj['PLT'].'</br>';
     echo $obj['MPV'].'</br>';
     echo $obj['PCT'].'</br>';
     echo $obj['PDW'].'</br>';
     echo $obj['SD'].'</br>';
     echo $obj['SDTSD'].'</br>';
     echo $obj['TSD'].'</br>';
     echo $obj['FERRITTE'].'</br>';
     echo $obj['FOLATE'].'</br>';
     echo $obj['B12'].'</br>';

  }

  sqlsrv_free_stmt($stmt);
  sqlsrv_close($conn);
  header("Location: connection.php");
 exit();

?>