<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Consolidated</title>
    <link rel="stylesheet" href="welcome.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <span>SYMBIOSIS</span>
            </div>
            <div class="navigationTab">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="Consolidated-Report">Attendance</a></li>
                    <li><a href="Exemption-Form">Exemption</a></li>
                    <li><a href="faculty">Faculty</a></li>
                </ul>
            </div>
            <div class="userData">

            </div>

        </div>

        <div class="Data">
            <div class="content">
                <div class="instituteData">
                    <?php
                    require "./Consolidated-Report/db.php";
                    $result = mysqli_query($conn, "SELECT fullname from {$prefix}course WHERE id = 1");
                    while ($row = mysqli_fetch_array($result)) {
                        $fullname = $row['fullname'];
                    }


                    $sentence = " " . $fullname . "";
                    echo "<h1>" . $sentence . "</h1>";
                    ?>
                    <p>Empowering institutes with real-time attendance tracking. Co-ordinator and faculty can easily
                        monitor
                        attendance, sessions, and exemptions, enhancing educational efficiency</p>
                    <div class="contactButton">
                        <a id='contact' href="Contact.php">Contact us</a>
                    </div>
                </div>
                <div class="instituteLogo">
                    <img src="logo.png" alt="loading">
                    <p>SYMBIOSIS</p>
                    <p>INTERNATIONAL (DEEMED UNIVERSITY)</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
