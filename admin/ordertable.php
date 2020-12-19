


<h2>ORDERS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ORDER DATE</th>
            <th>EXPECTED DATE</th>
            <th>TOTAL AMOUNT</th>
            <th>PAYMENT STATUS</th>
            <th>CART ID</th>
           
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("ImConnect.php") ?>
<?php 
 $sql ="SELECT * FROM orders";
 $result =mysqli_query($connection,$sql);
 if($result-> num_rows != 0){
 while ($row = $result-> fetch_assoc()){
    echo"<tr><td>".$row["o_id"]."</td>";
    echo"<td>".$row["order_date"]."</td>";
    echo"<td>".$row["expected_date"]."</td>";
    echo"<td>".$row["total_amount"]."</td>";
    echo"<td>".$row["payment_status"]."</td>";
    echo"<td>".$row["c_id"]."</td>";
    
    echo"<td>"."<a href=deleteP.php?id=".$row["p_id"].">Reject</a>"."</td></tr>";

 } 
 echo "</table>";
}
else{
    echo "0 result";

}
$connection-> close();
 ?>


           
        </tr>
        
        <tbody>
    </table>
</div>


