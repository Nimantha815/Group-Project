


<h2>SELLERS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <!-- <th>LAST NAME</th> -->
            <th>EMAIL</th>
            <!-- <th>GENDER</th> -->
            <!-- <th>DOB</th> -->
            <th>PROVINCE</th>
            <th>ADD_LINE1</th>
            <th>ADD_LINE2</th>
            <th>ADD_LINE3</th>
            <th>CONTACT NUMBER</th>
            
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("Inconnect.php") ?>
<?php 
 $sql ="SELECT * FROM sellers";
 $result =$connection-> query($sql);
 if($result->num_rows > 0){
 while ($row = $result-> fetch_assoc()){
    echo"<tr><td>".$row["s_id"]."</td>";
    echo"<td>".$row["shop_name"]."</td>";
    // echo"<td>".$row["l_cat"]."</td>";
    echo"<td>".$row["email"]."</td>";
    // echo"<td>".$row["gender"]."</td>";
    // echo"<td>".$row["dob"]."</td>";
    echo"<td>".$row["province"]."</td>";
    echo"<td>".$row["a_line_1"]."</td>";
    echo"<td>".$row["a_line_2"]."</td>";
    echo"<td>".$row["a_line_3"]."</td>";
    echo"<td>".$row["tel_no"]."</td>";
    echo"<td>"."<a href=deletes.php?id=".$row["s_id"].">Reject</a>"."</td></tr>";

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


