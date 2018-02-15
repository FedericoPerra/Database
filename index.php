<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" typer ="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3 align="center">Tabella CRUD con libreria bootstrap</h3>
<div class="container">
    <h1 id="button"><button class="btn success">Add new record</button></h1>
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
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Utenti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Nome, Cognome, Email FROM Credenziali";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['Nome']."</td>";
        echo "<td>".$row['Cognome']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td><button type=\"button\" class=\"btn btn-primary\">Update</button></td>";
        echo "<td><button type=\"button\" class=\"btn btn-danger\">Delete</button></td>";
        echo "</tr>";
    }
}
echo "</table>";

$conn->close();
?>
