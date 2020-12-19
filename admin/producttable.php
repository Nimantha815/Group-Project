
<h2 align="center">PRODUCTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>DESCRIPTION</th>
            <th>COLOR</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>WEIGHT</th>
            <th>PATH</th>
            <th>ADD</th>
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("ImConnect.php") ?>
<?php 
 $sql ="SELECT p_id,p_name,p_cat,p_des,p_color,p_price,p_quantity,p_weight,p_path1 FROM product";
 $result =mysqli_query($connection,$sql);
 if($result-> num_rows != 0){
 while ($row = $result-> fetch_assoc()){
    echo"<tr><td>".$row["p_id"]."</td>";
    echo"<td>".$row["p_name"]."</td>";
    echo"<td>".$row["p_cat"]."</td>";
    echo"<td>".$row["p_des"]."</td>";
    echo"<td>".$row["p_color"]."</td>";
    echo"<td>".$row["p_price"]."</td>";
    echo"<td>".$row["p_quantity"]."</td>";
    echo"<td>".$row["p_weight"]."</td>";
    echo"<td>".$row["p_path1"]."</td>";
   $_SESSION["img"] = $row["p_path1"];
    echo"<td>"."<a href=accept.php?id=".$row["p_id"].">Add</a></td>";
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


