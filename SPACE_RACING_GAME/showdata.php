<?php
$conn =mysqli_connect("localhost","id18025047_ssipmbs1234","Satria123&&&&","id18025047_ssipmbs123");

$sql="select * from mbs_quiz1";
    $all = mysqli_query($conn, $sql);
    $max = 0;
    $min = 0;
    $each = array();
    echo "<table style='text-align:center; margin:auto;' border='1'>";
    echo "<th>VALUES</th><th>DELETE</th>";
    
    while ($row = mysqli_fetch_assoc($all)) {
    $el = explode(" ", $row["nilai"]);
    foreach ($el as $value) {
      array_push($each, $value);
    }
    echo "<tr><td>".$row["nilai"]."</td><td><button onclick='deletedata(".$row['id'].");showdata()'>DELETE</button></td></tr>";
    }
    
    foreach ($each as $value) {
    if($max == 0 || $value>=$max) $max = $value;
    if($min == 0 || $value<$min) $min = $value;
    
    }
    echo "</table>";
    echo "<span style='font-size:22px; color:lightblue;'>Max = ".$max." </span>";
    echo "<span style='font-size:22px; color:lightblue;'>Min = ".$min."</span>";
?>