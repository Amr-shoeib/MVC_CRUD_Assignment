<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <h1>Create User</h1>
    <form method="post" action="index.php?controller=users&action=store">
        <label>Last Name:</label>
        <input type="text" name="last_name"><br>

        <label>First Name:</label>
        <input type="text" name="first_name"><br>

        <label>Username:</label>
        <input type="text" name="username"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <label>Photo:</label>
        <input type="text" name="photo"><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
