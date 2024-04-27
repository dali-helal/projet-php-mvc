<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" type="text/css" href="css/users/index.css">
</head>
<body>
    <h3>Event Details</h3>
    <div class="container">
        <form action="index.php?controller=EventController&action=updateEvent" method="post">
            <input type="hidden" name="event_id" value="<?= $event['id']; ?>">
            
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="<?= $event['title']; ?>" required><br><br>
            
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required><?= $event['description']; ?></textarea><br><br>
            
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" value="<?= $event['date']; ?>" required><br><br>
            
            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location" value="<?= $event['location']; ?>" required><br><br>
            
            <input type="submit" value="Update Event">
        </form>
    </div>
</body>
</html>
