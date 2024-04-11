
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/event/index.css">
</head>
<body>
    <div class="event-container-form">
    <h2>Create New User</h2>
    <form action="index.php?controller=UserController&action=store" method="post">

        <label for="nom">Nom:</label>

        <input type="text" id="nom" name="nom" required><br><br>
        <label for="prenom">Prénom:</label>

        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="email">Email:</label>

        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Create User">
    </form>
    </div>

</body>
</html>