<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usersEvents/index.css">
    <title>Participation Form</title>
</head>
<body>

<h2>Participation Form</h2>

<form action="index.php?controller=ParticipateController&action=store" method="post" class='participate-form'>
    <div>
    <label for="user">Select User</label>
    <select name="user" id="user">
        <?php foreach ($users as $user): ?>
            <option value="<?php echo $user['user_id']; ?>"><?php echo $user['nom']; ?></option>
        <?php endforeach; ?>
    </select>
    </div>

    <div>
    <label for="event">Select Event</label>
    <select name="event" id="event">
        <?php foreach ($events as $event): ?>
            <option value="<?php echo $event['id']; ?>"><?php echo $event['title']; ?></option>
        <?php endforeach; ?>
    </select>
    </div>

    <input type="submit" value="Participate">
</form>
    
</body>
</html>