


<h2>POSTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>USER NAME</th>
            <th>DESCRIPTION</th>
            
            <th>IMAGE</th>
            
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("Inconnect.php") ?>
<?php 
 $sql ="SELECT * FROM posta";
 $result =$connection-> query($sql);
 if($result){
 while ($row = $result-> fetch_assoc()){
    echo"<tr><td>".$row["p_id"]."</td>";
    echo"<td>".$row["p_title"]."</td>";
    echo"<td>".$row["p_user"]."</td>";
    echo"<td>".$row["p_des"]."</td>";
    
   "<td>"?><img src="<?php echo $row["p_img"];?>"height="100" width="100"><?php echo "</td>";
    
    echo"<td>"."<a href=deletepoA.php?id=".$row["id"].">DELETE</a>"."</td></tr>";

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


