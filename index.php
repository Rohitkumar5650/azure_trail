
<?php
$connectionOptions = array(
    "Database" => "maindatabase", // update me
    "Uid" => "trialdb", // update me
    "PWD" => "asdfgh123#" // update me
    );
    //Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn==false){
    die(print_r(sqlsrv_errors(), true));
}else{
    print_r("conneted");
}
?>
<iframe src='https://webchat.botframework.com/embed/qnamakerforcowin-bot?s=OdzZZ7CpRk0.BobIIhWmNk40uHmVvspcCb5KTTcpuHxsGu6V4PC2mh8'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>