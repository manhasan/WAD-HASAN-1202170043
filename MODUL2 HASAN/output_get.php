<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>My Booking</title>
    <link rel="stylesheet" href="Booking.css">
    <script> https://www.w3schools.com/css/css_website_layout.asp</script>
</head>
    <div class="navbar">
    <ul>
        <li> <a href="Home.html">Home</a> </li>
        <li> <a href="Booking.html">Booking</a> </li>
    </ul>
</div>
<body>
    <?php
    $name = $_GET['name'];
    $check-in = $_GET['check_in'];
    $duration = $_GET['duration'];
    $room_type = $_GET['room_type'];
    $add_service = $_GET['add_service'];
    $no_hp = $_GET['no_hp'];
    ?>
    <div class="container-sm">
    <fieldset>
        <table class="table">
            <tr>
                <td>Name:</td>
                <td><?=name ?> </td>
            </tr>
            <tr>
                <td>Check In:</td>
                <td><?=check-in ?> </td>
            </tr>
            <tr>
                <td>Duration:</td>
                <td><?=duration ?> </td>
            </tr>
            <tr>
                <td>Room Type:</td>
                <td><?=room_type ?> </td>
            </tr>
            <tr>
                <td>Add Service:</td>
                <td><?=add_service ?> </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td><?=no_hp ?> </td>
            </tr>
</body>
</html>