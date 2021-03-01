 <?php
$link=mysqli_connect("localhost","root","","airline");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
/*$res=mysqli_query($link,"select * from ---");
echo "<table border='1' align=center width=100%>";
echo "<tr color='red'>  <th width=15% align=center>Customer Id</th>
                        <th width=15% align=center>Email</th>
                        <th width=15% align=center>City</th>
                        <th width=15% align=center>Travelers</th>
                        <th width=15% align=center>State</th>
                        <th width=15% align=center>Card</th>
                        <th width=15% align=center>Expired month</th>
                        <th width=15% align=center>Expired Year</th>
                        <th width=15% align=center>CVV</th>
</tr>";
while($arr=mysqli_fetch_row($res))
    echo"<tr>
    
    <td align=center>$arr[0]</td>
    <td align=center>$arr[1]</td>
    <td align=center>$arr[2]</td>
    <td align=center>$arr[3]</td>
    <td align=center>$arr[4]</td>
    <td align=center>$arr[5]</td>
    <td align=center>$arr[6]</td>
    <td align=center>$arr[7]</td>
    <td align=center>$arr[8]</td>
    <td align=center>$arr[9]</td>
</tr>";

echo "</table>";
?>*/
$name=$_POST['name'];
$id=$_POST['id'];
$password=$_POST['password'];
echo " INSERTED SUCCESSFULLY<br/><br/><br/>";
$query="insert into tab7 values('$name','$id','$password')";
mysqli_query($link,$query) or die(mysql_error());
$res=mysqli_query($link,"select * from tab7");
echo "<table border='1' align=center width=60%>";
echo "<tr>  <th width=15% align=center>name</th>
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
      