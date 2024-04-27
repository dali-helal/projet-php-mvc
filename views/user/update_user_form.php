
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/users/index.css">
</head>
<body>
    <h3>User Details</h3>
    <div class="container">
        <form action="index.php?controller=UserController&action=updateUser" method="post" class="user-form">
        <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">
        <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?= $user['nom']; ?>" required><br><br>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="<?= $user['prenom']; ?>" required><br><br>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $user['email']; ?>" required><br><br>
            </div>
            <div class="form-group">
                <input type="submit" value="Update User">
            </div>
        </form>
    </div>
</body>
</html>