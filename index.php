<?php
$users = $data['users'];
?>
    <link rel="stylesheet" type="text/css" href="css/main.css">

<h1>Users</h1>
<table>
    <thead>
        <tr>

        <form method="get" action="index.php" name="searchform" id="searchform">
		<input type="text" name="str" id="str" placeholder="Hit 'Enter' to search...">
		<input type="submit" name="submit" id="submit" value="search">
	</form>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Photo</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['ID']; ?></td>
                <td><?php echo $user['Last_Name']; ?></td>
                <td><?php echo $user['First_Name']; ?></td>
                <td><?php echo $user['Username']; ?></td>
                <td><?php echo $user['Password']; ?></td>
                <td><?php echo $user['Photo']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['ID']; ?>">Edit</a>
					<a href="create.php?id=<?php echo $user['ID']; ?>">Create</a>


                    <a href="delete.php?id=<?php echo $user['ID']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- <a href="create.php">Add User</a> -->
