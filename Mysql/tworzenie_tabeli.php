<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername, $username, $password,$database);

/*$sql = "CREATE TABLE MyGuests123(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT
CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn,$sql)){
    echo"Table MyGuests123 created successfully";
}else{
    echo "Error  creating table:". mysqli_error($conn);
}

$sql = "INSERT INTO myguests123 (firstname, lastname,email) Values 
('John','Doe','john@example.pl'),
('Marek','Bob','Ma@example.pl'),
('Julia','Dob','Jas@example.pl'),
('Krystian','Makowski','Kryst@example.pl')";

if (mysqli_query($conn,$sql)){
    echo"Table MyGuests123 created successfully";
}else{
    echo "Error  creating table:". mysqli_error($conn);
}
    

$sql = "SELECT id, firstname,lastname FROM myguests123";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id:" . $row["id"]."-Name:". 
        $row["firstname"]. " ". $row ["lastname"]."<br>";
    }
}else{
    echo "0 results";
}
$sql = "SELECT id, firstname,lastname FROM myguests123";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_row($result)){
        echo "id:" . $row[0]."-Name:". 
        $row[1]. " ". $row [2]."<br>";
    }
}else{
    echo "0 results";
}*/
$sql = "SELECT id, firstname,lastname FROM myguests123";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
     echo"<table>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr><td>" . $row[0]."</td><td>". 
        $row[1]. "</td><td>". $row [2]."</td><tr>";
    }
    echo "</table>";
}else{
    echo "0 results";}
?>