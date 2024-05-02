<!DOCTYPE html>
<html>
<head>
    <title>Event Management System</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <style>
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="event_list">Events List</a>
            <a href="users_list">Users List</a>
            <a href="create-new-event">Create New Event</a>
            <a href="create_new_user">Create New User</a>
            <a href="participate">Participate in Event</a>
            <a href="my_events">My Participated Events</a>
            </ul>
        </div>
    </header>
    
    <div class="content">
        <?php include $content; ?>
    </div>
    <footer>
        &copy; 2024 Event Management System
    </footer>
</body>
</html>
