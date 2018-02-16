<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post">
<h3 align="center">Tabella CRUD con libreria bootstrap</h3>
<div class="container">
    <h1 id="button"><button type="submit" class="btn success" formaction="Modify.php">Add new record</button></h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
    </div>
</form>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Utenti";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        $riga=$row['id'];
        echo "<td>".$row['Nome']."</td>";
        echo "<td>".$row['Cognome']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<input type='hidden' name='identification' value='$riga'>";
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate' formaction='Modify.php'>Update</button></td>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete' formaction='Delete.php'>Delete</button></td>";
        echo "</tr>";
    }
}
echo "</table>";

$conn->close();

?>
