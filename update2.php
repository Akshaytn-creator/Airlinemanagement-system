<?php
$new=mysqli_connect("localhost","root","","airline");
echo "CONGRATULAIONS!YOU WIL RECIEVE A MAIL AS SOON AS POSIIBLE";
if(!$new)
{
echo "UNABLE TO CONNECT";
exit;
}
$FIRSTNAME=$_POST['fna'];
$LASTNAME=$_POST['lna'];
$EMAILID=$_POST['eid'];
$CONTACTNO=$_POST['cno'];
$PASSWORD=$_POST['ps'];
$CONFIRMPASSWORD=$_POST['cp'];
$query="update tab6 set FIRSTNAME='$FIRSTNAME',LASTNAME='$LASTNAME',EMAILID='$EMAILID',PASSWORD='$PASSWORD',CONFIRMPASSWORD='$CONFIRMPASSWORD' where CONTACTNO='$CONTACTNO'";
/*$query="update customer set city='$city' where fname='$fname'";
$query="update customer set travelers='$travelers' where fname='$fname'";
$query="update customer set state='$state' where fname='$fname'";
$query="update customer set card='$card' where fname='$fname'";
$query="update customer set expmonth='$expmonth' where fname='$fname'";
$query="update customer set expyear='$expyear' where fname='$fname'";
$query="update customer set cvv='$cvv' where fname='$fname'";*/
mysqli_query($new,$query) or die(mysql_error());
$res=mysqli_query($new,"select * from  tab6");
echo "<table border='1' align=center width=60%>";
echo "<tr>  
                        <th width=15% align=center>FIRSTNAME</th>
                        <th width=15% align=center>LASTNAME</th>
                        <th width=15% align=center>EMAILID</th>
						 <th width=15% align=center>CONTACTNO</th>
						 <th width=15% align=center>PASSWORD</th>
						 <th width=15% align=center>CONFIRMPASSWORD</th>
						
                    
</tr>";
while($arr=mysqli_fetch_row($res))
echo"<tr>
    <td>$arr[0]</td>
     <td>$arr[1]</td>
     <td>$arr[2]</td>
	 <td>$arr[3]</td>
	 <td>$arr[4]</td>
	 <td>$arr[5]</td>
</tr>";
echo "</table>";
?>  
<html>
 <head></head>
<body>
<button onclick='func()'>print this page</button>
<script>
function func(){
window.print();
}
</script>
</body>
</html>
 