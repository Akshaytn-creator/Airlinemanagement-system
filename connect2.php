 <?php
$link=mysqli_connect("localhost","root","","airline");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$PassportNo= $_POST['pno'];
$CustomerName= $_POST['cname'];
$FathersName= $_POST['fname'];
$DOB = $_POST['dob'];
$Address = $_POST['add'];
$ContactNo= $_POST['cno'];
echo " INSERTED SUCCESSFULLY<br/><br/><br/>";
$query="insert into  tab3 values('$PassportNo','$CustomerName','$FathersName','$DOB ','$Address','$ContactNo')";
mysqli_query($link,$query) or die(mysql_error());
$res= mysqli_query($link,"select * from tab3");
echo "<table border='1' align=center width=60%>";
echo "<tr>
                        <th width=15% align=center>PassportNo</th>
                        <th width=15% align=center>CustomerName</th>
                        <th width=15% align=center>FathersName</th>
                        <th width=15% align=center>DOB</th>
                        <th width=15% align=center>Address</th>
                        <th width=15% align=center>ContactNo</th>
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
</ht
      