<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>E-Counter</title>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <a href="#" id="logo"><div class="logo">E-Counter</div></a>
        <!-- <img src="resources/img/favicon.png" alt="logo_icon" width="40" height="40"> -->
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="src/book_counter.php">Book Counter</a></li>
                <li class="show_avc">
                    <a href="src/show_avc">Show Counters</a>
                    <!-- DROPDOWN MENU -->
                    <!-- <ul class="dropdown">
                        <li><a href="/">Dropdown 1 </a></li>
                        <li><a href="/">Dropdown 2</a></li>
                        <li><a href="/">Dropdown 2</a></li>
                        <li><a href="/">Dropdown 3</a></li>
                        <li><a href="/">Dropdown 4</a></li>
                    </ul> -->
                </li>
                <li><a href="src/feedback.php">Feedback</a></li>
                <li><a href="src/contact_us.php">Contact Us</a></li>
            </div>
        </ul>
    </nav>
</body>

</html>