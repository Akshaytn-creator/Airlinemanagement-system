<?php
$new=mysqli_connect("localhost","root","","airline");

if(!$new)
{
echo "UNABLE TO CONNECT";
exit;
}
$name=$_POST['name'];
$id=$_POST['id'];
$password=$_POST['password'];
$query="delete from tab7 where id='$id'";
/*$query="update customer set city='$city' where fname='$fname'";
$query="update customer set travelers='$travelers' where fname='$fname'";
$query="update customer set state='$state' where fname='$fname'";
$query="update customer set card='$card' where fname='$fname'";
$query="update customer set expmonth='$expmonth' where fname='$fname'";
$query="update customer set expyear='$expyear' where fname='$fname'";
$query="update customer set cvv='$cvv' where fname='$fname'";*/
echo "DELETED  SUCCESSFULLY";
mysqli_query($new,$query) or die(mysql_error());
$res=mysqli_query($new,"select * from  tab7");
echo "<table border='1' align=center width=60%>";
echo "<tr>  
                        <th width=15% align=center>name</th>
                        <th width=15% align=center>id</th>
                        <th width=15% align=center>password</th>
                    
</tr>";
while($arr=mysqli_fetch_row($res))
echo"<tr>
    <td>$arr[0]</td>
     <td>$arr[1]</td>
     <td>$arr[2]</td>
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
 
