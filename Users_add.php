<?php
   include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
  include "admin_sidebar.php";
  //  include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Users_add_style.css">
</head>

<body>
    <form class="add_Users_form" action="Users_add_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Create account . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <input name="fname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Last Name :</b></label><br>
                <input name="lname" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Gender :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="gender" value="male" id="male-radio" checked>
                    <label id="radio-label" for="male-radio"><span class="radio">Male</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
                    <label id="radio-label" for="female-radio"><span class="radio">Female</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
                    <label id="radio-label" for="other-radio"><span class="radio">Others</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Date of Birth :</label><br>
                <input name="dob" size="30" type="text" placeholder="yyyy-mm-dd" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>NRC No :</label><br>
                <input name="nrc_no" size="25" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Phone No. :</b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="address" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Bank Branch :</label>
            </div>
            <div  class=container>
                <select name="branch">
                    <option value="Lusaka">Lusaka</option>
                    <option value="Kitwe">Kitwe</option>
                    <option value="Ndola">Ndola</option>
                </select>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="25" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Opening Balance :</label><br>
                <input name="o_balance" size="20" type="text" required />
            </div>
            <div  class=container>
                <label>PIN(4 digit) :</b></label><br>
                <input name="pin" size="15" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Username :</label><br>
                <input name="cus_uname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Password :</b></label><br>
                <input name="cus_pwd" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
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
