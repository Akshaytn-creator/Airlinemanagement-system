<?php
$new=mysqli_connect("localhost","root","","airline");
if(!$new)
{
echo "UNABLE TO CONNECT";
exit;
}
$TicketNumber=$_POST['tnum'];
$CustomerName=$_POST['cnam'];
$SeatNumber=$_POST['snum'];
$FareAmount=$_POST['fam'];
$CancelAmount=$_POST['ca'];
$RefundAmount=$_POST['ram'];
$query="update tab4 set CustomerName='$CustomerName', SeatNumber='$SeatNumber',FareAmount='$FareAmount' ,CancelAmount='$CancelAmount',RefundAmount='$RefundAmount' where TicketNumber='$TicketNumber'";
/*$query="update customer set city='$city' where fname='$fname'";
$query="update customer set travelers='$travelers' where fname='$fname'";
$query="update customer set state='$state' where fname='$fname'";
$query="update customer set card='$card' where fname='$fname'";
$query="update customer set expmonth='$expmonth' where fname='$fname'";
$query="update customer set expyear='$expyear' where fname='$fname'";
$query="update customer set cvv='$cvv' where fname='$fname'";*/
echo "UPDATED SUCCEFULLY";
mysqli_query($new,$query) or die(mysql_error());
$res=mysqli_query($new,"select * from  tab4");
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
 