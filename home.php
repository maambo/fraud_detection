<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Client side</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="Users_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>
                    <center>
                        <div class="grid-button">
                            <div class="">
                                <button type="submit">Login</button>
                            </div>
                            <div class="">
                            <div class="sign_up">
                                <button>Sign Up</button>
                            </div>
                        </div>
                    </center>

                </form>
                
            </div>
        </div>

    </div>

</body>

</html>

<?php include "easter_egg.php"; ?>

<script>

$(".sign_up").click(function(){
    window.location.href="Users_add.php";
})

    </script>