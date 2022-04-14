<?php

function getallpendingdeal()
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from pending_deal";
    $result = mysqli_query($con ,$sql);
    $Data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $Data[] = $row;
    }
    return $Data;
    
}

?>