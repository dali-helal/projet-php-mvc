<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="css/users/index.css">
</head>
<body>
    <h3>Users List</h3>
    <div class="container">
        <table class="user-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Action</th> <!-- New column for action buttons -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr class="user-row">
                        <td><?= $user['nom']; ?></td>
                        <td><?= $user['prenom']; ?></td>
                        <td><?= $user['email']; ?></td>
                    
                    <td class="action-container">
                        <form method="post" action="index.php?controller=UserController&action=edit&&user_id=<?= $user['user_id']; ?>" >
                        <button type="submit" class="btn-update">Update</button>
                        </form>
                        <a href="index.php?controller=UserController&action=delete&&user_id=<?= $user['user_id']; ?>" class="btn-delete">Delete</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
