<!DOCTYPE html>
<html>
<!-- center table creation -->
<table width = 100%;>
    <tr height = 100px style ="background-color:#C1BCBC ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="logo.png">
        </td>
        <td align = right >
            <table >
                <!-- center menubar -->
                <tr style ="font-size:20px;">
                    <td><a href="#">Home  |</a></td>
                    <td><a href="#"> About us  |</a></td>
                    <td><a href="#"> logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- daynamic menubar -->
    <tr  height = 700px>
        <td width =10%; valign = top; style ="background-color:#C1BCBC; font-size:20px;">
            <a href="#">user Account</a><br><br>
            <a href="#">verfiy ducument</a><br><br>
            <a href="approvePost.php">control deal</a><br><br>
            <a href="#">Approve post</a><br><br>
            <a href="#">Edit profile</a><br><br>
        </td>
        <!-- output of user -->
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = center>Control farmer and Retailer Dealing</h1><hr>
            <table  align="center" width="500px" >
                <tr>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="approveDeal.php">Approve Deal</a></td>
                    <td height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="cencelDeal.php">Cancel Deal</a></td>
                </tr>
                <tr>
                    <td colspan="2" height="100px" width="100px" bgcolor="#aaa69d" align="center"><a href="HistoryDeal.php">History</a></td>
                </tr>
            </table>
            


        </td>
    </tr>
    <!-- footer section -->
    <tr  height = 100px;>
        <td colspan="2" style ="background-color:black; color:white;align = center "; align = center>
           coppyright @2022
        </td>
    </tr>
</table>


</html>