<?php include 'pure_php.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
   

    <a href = "next_page.php">Next Page</a>
    <a href = "example2.php">Form Validation</a>
    <h1>Hello World</h1>

    <h2>Username : <u><?php echo $username; ?></u></h2>
    <h2>User ID : <u><?php echo $user_id; ?></u></h2>
    <h2>Usernumber : <u><?php echo $user_id; ?></u></h2>
    <h2>User_email : <u><?php echo $username; ?></u></h2>

<button type="button" onclick="greetuser()">Greet User</button>
<button type="button" onclick="WelcomeUser()"> GREETINGS</button>

<script>
    // variables
    var username = "<?php echo $username; ?>";
    var user_id = "<?php echo $user_id; ?>";
    var usernumber = "<?php echo $user_id; ?>";
    var user_email = "<?php echo $username; ?>";

    // function
    function greetuser() {
        alert("Hello, " + username + "! Your user ID is " + user_id) + ". Your user number is " + usernumber + ". Your email is " + user_email + ".";
    }

    function WelcomeUser() {
        alert("Welcome, " + username + "!");
    }
</script>
</body>
</html>