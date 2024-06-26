<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/event/index.css">
</head>
<body>
    
<h3>Liste des événements</h3>
<div class="event-container">
    <?php foreach ($events as $event): ?>
        <div class="event-card">
            <h4><?= $event['title']; ?></h4>
            <p>Date: <?= $event['date']; ?></p>
            <p>Lieu: <?= $event['location']; ?></p>
            <p>Description: <?= $event['description']; ?></p>
            <p>Participants: <?= $event['participants_count']; ?></p> 
            <div class="action">
            <form method="post" action="index.php?controller=EventController&action=edit&&event_id=<?= $event['id']; ?>" >
                <button type="submit" class="btn-update">Update Event </button>
            </form>
            <div>
            <a href="index.php?controller=EventController&action=delete&&event_id=<?= $event['id']; ?>" class="btn-delete">Delete Event</a>
            </div>
             
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
