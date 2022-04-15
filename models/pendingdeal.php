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
function deletpendingdeal($farmerusername,$retailerusername)
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "delete from pending_deal where  farmerusername = '$farmerusername' and retailerusername = '$retailerusername'";
    
    if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}
function approvedeal($farmerusername,$retailerusername,$discription,$amount,$qntty,$date,$pn)
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "insert into approve_deal values('$farmerusername','$retailerusername','$pn','$discription','$amount','$qntty','$date')";
    
    if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }

}
function getalldealhistory()
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from approve_deal";
    $result = mysqli_query($con ,$sql);
    $Data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $Data[] = $row;
    }
    return $Data;
    
}


function live($word)
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from approve_deal where farmerusername like '%$word%'  ";
    $result = mysqli_query($con ,$sql);
    $Data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $Data[] = $row;
    }
    return $Data;
    

}

?>