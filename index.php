<?php
$users = $data['users'];
?>

<h1>Users</h1>
<table>
    <thead>
        <tr>
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
