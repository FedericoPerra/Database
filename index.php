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
<form method="post" action="addRecordMenu.php">
<h3 align="center">Tabella CRUD con libreria bootstrap</h3>
<div class="container">
    <h1 id="button"><button type="submit" class="btn success" formaction="addRecordMenu.php">Add new record</button></h1>
    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </div>
</form>

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
        $riga=$row['id'];
        $nome=$row['Nome'];
        $cognome=$row['Cognome'];
        $email=$row['Email'];
        echo "<form action='Modify.php' method='post'>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<input type='hidden' name='name' value=$nome>";
        echo "<input type='hidden' name='surname' value=$cognome>";
        echo "<input type='hidden' name='email' value=$email>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['Nome']."</td>";
        echo "<td>".$row['Cognome']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td><button type=\"submit\" class=\"btn btn-primary\" name='btnUpdate'>Update</button></td>";
        echo"</form>";
        echo "<form action='Delete.php' method='post'>";
        echo "<input type='hidden' name='identification' value=$riga>";
        echo "<td><button type=\"submit\" class=\"btn btn-danger\" name='btnDelete'>Delete</button></td>";
        echo "</form>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</body>";

$conn->close();

?>
