<!DOCTYPE html>
<html>
<head>
    <title>Show User</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <h1>Show User</h1>
    <p>ID: <?= $user['ID'] ?></p>
    <p>Last Name: <?= $user['Last_Name'] ?></p>
    <p>First Name: <?= $user['First_Name'] ?></p>
    <p>Username: <?= $user['Username'] ?></p>
    <p>Password: <?= $user['Password'] ?></p>
    <p>Photo: <?= $user['Photo'] ?></p>
    <a href="index.php">Back to list</a>
</body>
</html>
