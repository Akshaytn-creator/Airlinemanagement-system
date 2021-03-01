 <?php
$link=mysqli_connect("localhost","root","","airline");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$TicketNumber=$_POST['tnum'];
$CustomerName=$_POST['cnam'];
$SeatNumber=$_POST['snum'];
$FareAmount=$_POST['fam'];
$CancelAmount=$_POST['ca'];
$RefundAmount=$_POST['ram'];
echo " INSERTED SUCCESSFULLY<br/><br/><br/>";
$query="insert into tab4 values('$TicketNumber','$CustomerName','$SeatNumber','$FareAmount','$CancelAmount','$RefundAmount')";
mysqli_query($link,$query) or die(mysql_error());
$res=mysqli_query($link,"select * from  tab4");
echo "<table border='1' align=center width=60%>";
echo "<tr>  
                        <th width=15% align=center>TicketNumber</th>
                        <th width=15% align=center>CustomerName</th>
                        <th width=15% align=center>SeatNumber</th>
                        <th width=15% align=center>FareAmount</th>
                        <th width=15% align=center>CancelAmount</th>
                        <th width=15% align=center>RefundAmount</th>
                    
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
 