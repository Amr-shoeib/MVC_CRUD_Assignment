<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="index.php?controller=users&action=update">
        <input type="hidden" name="id" value="<?= $user['ID'] ?>">

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?= $user['Last_Name'] ?>"><br>

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?= $user['First_Name'] ?>"><br>

        <label>Username:</label>
        <input type="text" name="username" value="<?= $user['Username'] ?>"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <label>Photo:</label>
        <input type="text" name="photo" value="<?= $user['Photo'] ?>"><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
