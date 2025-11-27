Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"];?>

<?php $servername="localhost";
$username="root";
$password="";
$database="goetel";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("błąd połączenia: ". mysqli_connect_error());
}
echo "sukces";

$name= $_POST["name"];
$email= $_POST["email"];

$sql = "INSERT INTO  MyGuests (firstname, email) Values ('$name','$email')";
echo $sql;
if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}else {
    echo "Error:". $sql."<br>". mysqli_error($conn);
}
?>