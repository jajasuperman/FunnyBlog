<?php

include 'db.php'; // Konektatu

$sql = "SELECT * FROM iruzkina WHERE BerriaID=".$_POST['berriaID'];	
$result = $conn->query($sql); //Datu-baseari eskaera bat egin
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='box comment'>
            <h4>".$row["Egilea"]."</h4>
            <p>".$row["Iruzkina"]."</p>
            <h6>".$row["Data"]."</h6>
        </div>";
    }    
}
else {
    echo "<div class='box comment'>
            Iruzkinik ez :(
          </div>";
}    

$conn->close();
?>