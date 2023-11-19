<?php
    include "validate_Users.php";
    include "header.php";
    include "Users_navbar.php";
    include "Users_sidebar.php";
 //   include "session_timeout.php";

    if (isset($_GET['cust_id'])) {
        $id = $_GET['cust_id'];
    }

    $sql0 = "SELECT * FROM Users WHERE cust_id=".$id;
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Users_add_style.css">
</head>

<body>
    <form class="add_Users_form" action="send_funds_action.php?cust_id=<?php echo $id ?>" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Transfer Funds</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>
                    To : <label id="info_label">
                        <?php echo $row0["first_name"]." ".$row0["last_name"] ?>
                    </label>
                </label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Account No : <label id="info_label"><?php echo $row0["account_no"] ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Amount (in ZMW) :</label><br>
                <input name="amt" size="24" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div  class=container>
                <label>Enter your password :</b></label><br>
                <input name="password" size="24" type="password" required />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <a href="http://localhost/online-banking-system-master/net-banking/beneficiary.php" class="button">Go Back</a>
            </div>

            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
