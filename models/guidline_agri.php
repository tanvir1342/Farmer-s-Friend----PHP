 <?php

function post_guidline($username,$post)
{
    $con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into guidline_agri (username,post) values('$username','$post')";
	if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function getallguidline()
{
    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "select *from guidline_agri";
    $result = mysqli_query($con ,$sql);
    if($row = mysqli_fetch_all($result))
    {
        return $row;
    }
    
}


?>