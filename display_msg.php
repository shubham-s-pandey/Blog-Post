<?php 

$sql = "SELECT * FROM blogs order by id desc";
$res = $db->query($sql);
$count = 0;

while($row = @mysqli_fetch_array($res)){
    $count++;
    $name = $row['name'];
    $email = $row['emailId'];
    $msg = $row['msg'];
    echo "<div class='sales' >";
    echo "<h2>NAME: $name</h2>";
    echo "<h2>Blog:</h2><br><br><br>";
    echo "<div style='padding:5px' class='bg-info'>";
    echo "<p style='font-size:24px'>$msg</p>";
    echo "</div>";
    echo "</div><br><br>";
    
}

?>
