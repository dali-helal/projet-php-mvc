<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/event/index.css">
</head>
<body>
    
<?php if (!empty($events)): ?>
    <?php $user_name = $events[0]['nom']; ?>
    <h3>Events Participated by <?php echo $user_name; ?></h3>
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
<?php else: ?>
    <p>No events found for this user.</p>
<?php endif; ?>
</div>
</body>
</html>
