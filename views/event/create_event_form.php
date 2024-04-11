
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/event/index.css">
</head>
<body>
    <div class="event-container-form">
    <h2>Create New Event</h2>
<form action="index.php?controller=EventController&action=store" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
    
    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required><br><br>
    
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" required><br><br>
    
    <input type="submit" value="Create Event">
</form>
    </div>

</body>
</html>