<?php

function post_guidline($username,$post)
{
    $con = mysqli_connect('localhost','root','','webtech');
	$sql = "insert into guidline_eco (username,post) values('$username','$post')";
	if(mysqli_query($con ,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>