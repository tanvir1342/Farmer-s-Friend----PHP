<?php
function getuser()
{
	$con = mysqli_connect('localhost','root','','webtech');
	$sql = "select *from blogger_post";
	$result = mysqli_query($con ,$sql);
	if ($result->num_rows > 0){
		$row = mysqli_fetch_all($result);
		return $row;
	}
	
}


//get all post json version
function getallpost()
{
	$con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from blogger_post";
    $result = mysqli_query($con ,$sql);
    $Data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $Data[] = $row;
    }
    return $Data;
}

/*function deletpendingdeal($farmerusername,$retailerusername)
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
}*/

function live($word)
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from blogger_post where username like '%$word%'  ";
    $result = mysqli_query($con ,$sql);
    $Data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $Data[] = $row;
    }
    return $Data;
    

}

?>