<?php
ob_start();
session_start();

$link = mysqli_connect(
    'localhost', 
    'root',
    'password', 
    'php2020' 
);


$SQL = "SELECT * FROM employee";

if ($result = mysqli_query($link,$SQL)){
    
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<td>".$row['No']."</td>";
    echo "<td>".$row['Fname']."</td>";
    echo "<td>".$row['Minit']."</td>";
    echo "<td>".$row['Lname']."</td>";
    echo "<td>".$row['Bdate']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Sex']."</td>";
    echo "<td>".$row['Salary']."</td>"; 
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['No']."</td>";
        echo "<td>".$row['Fname']."</td>";
        echo "<td>".$row['Minit']."</td>";
        echo "<td>".$row['Lname']."</td>";
        echo "<td>".$row['Bdate']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Sex']."</td>";
        echo "<td>".$row['Salary']."</td>";
        echo "<tr>";
    }
    echo "</table>";
}
else {
        echo "error!"
}

echo "</center>"
?>