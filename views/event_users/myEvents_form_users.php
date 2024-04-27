<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usersEvents/index.css">
    <title>Participation Page</title>
</head>
<body>

<h2>Choose User</h2>

<form class='participate-form' onsubmit="redirectToParticipate()">
    <div>
        <label for="user">Select User</label>
        <select name="user_id" id="user_id">
            <?php foreach ($users as $user): ?>
                <option value="<?php echo $user['user_id']; ?>"><?php echo $user['nom']; ?></option>
            <?php endforeach; ?>
        </select>
        <a href="#" id="viewEventsLink" class="btn-view">View Events</a>
    </div>
</form>

<script>
    document.getElementById("viewEventsLink").addEventListener("click", function(event) {
        event.preventDefault();

        var selectedUserId = document.getElementById("user_id").value;
        var url = "index.php?controller=ParticipateController&action=participate&user_id=" + selectedUserId;
        window.location.href = url;
    });
</script>

</body>
</html>
