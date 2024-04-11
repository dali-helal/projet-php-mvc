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
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
