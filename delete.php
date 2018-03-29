<?php
if($_SERVER['REQUEST_METHOD'] === 'GET' && key_exists("lijnID",$_GET)){
    require_once ("scripts/call_api.php");

    $result = CallAPI("DELETE","http://localhost:8080/extern/api.php/tbllijnen/".$_GET['lijnID']);

    print_r($result);
    if(is_numeric($result)&& $result==1){
        header( "location: index.php" );
    }else{
        print_r($result);
        header( "refresh:5;url=index.php" );
    }
}else{
    echo "de link die u gevolgd hebt werkt niet.";
    header( "refresh:3;url=index.php" );
}
