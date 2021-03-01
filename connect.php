 <?php
$link=mysqli_connect("localhost","root","","airline");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$username =$_POST['uname'];
$Emailid =$_POST['eid'];
$password=$_POST['psw'];
echo " INSERTED SUCCESSFULLY<br/><br/><br/>";
$query="insert into tab1 values('$username','$Emailid','$password')";
mysqli_query($link,$query) or die(mysql_error());
$res=mysqli_query($link,"select * from tab1");
echo "<table border='1' align=center width=60%>";
echo "<tr>  
                        <th width=15% align=center>username</th>
                        <th width=15% align=center>Emailid</th>
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
