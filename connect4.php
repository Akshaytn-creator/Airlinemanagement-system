 <?php
$link=mysqli_connect("localhost","root","","airline");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$Flightname=$_POST['fname'];
$FlightCode=$_POST['fcode'];
$ClassName=$_POST['cname'];
$TotalSeats =$_POST['tseats'];
$Source=$_POST['sou'];
$destination=$_POST['destiny'];
$DepartureTime=$_POST['dtime'];
$arrival =$_POST['arri'];
$Fare  =$_POST['fare'];
echo " INSERTED SUCCESSFULLY<br/><br/><br/>";
$query="insert into tab5 values('$Flightname','$FlightCode','$ClassName','$TotalSeats','$Source','$destination','$DepartureTime','$arrival','$Fare ')";
mysqli_query($link,$query) or die(mysql_error());
$res=mysqli_query($link,"select * from tab5");
echo "<table border='1' align=center width=60%>";
echo "<tr>  
                        <th width=15% align=center>Flightname</th>
                        <th width=15% align=center>FlightCode</th>
                        <th width=15% align=center>ClassName</th>
                        <th width=15% align=center>TotalSeats</th>
                        <th width=15% align=center>Source</th>
                        <th width=15% align=center>destination</th>
                        <th width=15% align=center>DepartureTime</th>
                        <th width=15% align=center>arrival</th>
                        <th width=15% align=center>Fare </th>
</tr>";
while($arr=mysqli_fetch_row($res))
echo"<tr>
    <td>$arr[0]</td>
     <td>$arr[1]</td>
     <td>$arr[2]</td>
     <td>$arr[3]</td>
     <td>$arr[4]</td>
     <td>$arr[5]</td>
     <td>$arr[6]</td>
     <td>$arr[7]</td>
     <td>$arr[8]</td>
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