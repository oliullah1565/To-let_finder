<?php
include('dbname.php');
$counter=$_GET['counter'];
$show="SELECT * FROM posts where $counter=counter";

?>
<h1 style="text-align:center" >Posts details</h1>

<table border="2" width="100%" ;>
    <?php
        $result=mysqli_query($conn,$show);
        while($row = mysqli_fetch_array($result)){
    ?>
	  <tr>
		<td>Title:<?php echo $row['title'];?> </td>
    </tr>
    <tr>
		<td>Description:<?php echo $row['description'];?> </td>
     </tr>
     <tr>
		<td>Phone:<?php echo $row['phone'];?> </td>
     </tr>
     <tr>
		<td>Posted Date:<?php echo $row['date'];?> </td>
     </tr>
     <tr>
		<td>Preferred Client:<?php echo $row['preferred_client'];?> </td>
     </tr>
     <tr>
		<td>Offering:<?php echo $row['offering'];?> </td>
     </tr>
     <tr>
		<td>Quantity:<?php echo $row['quantity'];?> </td>
     </tr>
     <tr>
		<td>Sublet:<?php echo $row['sublet'];?> </td>
     </tr>
     <tr>
		<td>District:<?php echo $row['district'];?> </td>
     </tr>
     <tr>
		<td>Aria:<?php echo $row['aria'];?> </td>
     </tr>
     <tr>
		<td>Address:<?php echo $row['address'];?> </td>
     </tr>
     <tr>
		<td>Price:<?php echo $row['price'];?> </td>
     </tr>
     <tr>
		<td>Nagotiable:<?php echo $row['nagotiable'];?> </td>
     </tr>
     <tr>
     <?php
        };
     
     ?>
</table>
<br>
 


