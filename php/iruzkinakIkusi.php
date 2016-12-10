<?php

include 'db.php'; 

$sql = "SELECT * FROM iruzkina WHERE BerriaID=".$_POST['berriaID'];	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='box comment'>
            <h5>".$row["Egilea"]."</h5>
            <p>".$row["Iruzkina"]."</p>
        </div>";
    }    
}
else {
    echo "Iruzkinik ez :(";
}    

$conn->close();
?>