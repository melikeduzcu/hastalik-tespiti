<?php

$serverName = "LAPTOP-2LU6L662";
$connectionInfo = array( "Database"=>"AnemiData", "UID"=>"", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

    $rdw=$_POST['rdw'];
    $plt=$_POST['plt'];
    $mpv=$_POST['mpv'];
    $pct=$_POST['pct'];
    $pdw=$_POST['pdw'];
    $sd=$_POST['sd'];
    $sdtsd=$_POST['sdtsd'];
    $tsd=$_POST['tsd'];
    $ferritte=$_POST['ferritte'];
    $folate=$_POST['folate'];
    $b12=$_POST['b12'];

    $deneme = (int) $rdw;


$sql = "INSERT INTO kan_sonuc(rdw,plt,mpv,pct,pdw,sd,sdtsd,tsd,ferritte,folate,b12) VALUES($deneme,?,?,?,?,?,?,?,?,?,?)";
 $params = array($rdw,$plt,$mpv, $pct, $pdw,$sd, $sdtsd, $tsd, $ferritte, $folate, $b12);

$stmt =sqlsrv_query($conn, $sql, $params);

if($stmt===false){
    echo "Veri eklenirken hata oluştu: ";
    die(print_r(sqlsrv_errors(), true));
}else{
    echo"veri başarı ile eklendi";
}

sqlsrv_close($conn);
?> 
