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
<form method="post" action="Modify.php">
    <input type="hidden" name="id" value="<?php echo $_POST['identification']?>">
    <div class="form-group">
        <label for="nm">Nome:</label>
        <input type="text" class="form-control" name="name" id="nm">
    </div>
    <div class="form-group">
        <label for="cnm">Cognome:</label>
        <input type="text" class="form-control" name="surname" id="cnm">
    </div>
    <div class="form-group">
        <label for="mail">Email:</label>
        <input type="email" class="form-control" name="Email" id="mail">
    </div>
    <div class="form-group">
        <label for="up">UPDATE:</label>
        <input type="submit" class="form-control" id="up">
    </div>
</form>
</body>
</html>