<!DOCTYPE html> 
<html>
    <head>
        <title>Edit Account</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signedInUser.css">
        <link rel="stylesheet" type="text/css" href="../css/customer.css">  
        <script src="../js/edit_account.js"></script>
    </head>
    <body>
        <div class="topBar">
            <div class="logo">
                <img src="../img/cart.png" height="100" width="100">
            </div>
            <div class="searchBar">
                <div></div>
                <div class="searchBarRow">
                    <div style="text-align: center;">
                        <input style="height:40px;" type="text" size="150">
                    </div>
                    <div>
                        <button class="searchButton"><img src="../img/search.png" height="30" width="30"></button>
                    </div>
                </div>
            </div>
            <div class="welcome">
                <span style="font-weight: bolder;font-size: 20px;">Welcome Back,</span><br>
                <span id="username">[username]</span><br><br>
                <button>My Account</button>&nbsp;&nbsp;
                <button>SignOut</button>
            </div>
        </div>
        <div class="main">
            <div class="covermain">
                <img src="../img/cover2.jpg" class="cover">
                <img src="../img/logo.png" height="100" width="100" class="propic">
            </div><br><br>
            <br>
            <div>
                <form action="../php/updateUser.php" method="POST">
                    <label for="change_pwd">Change Password</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

                    <fieldset id="pwdreset" style="border: none;">
                        <label for="oldpwd">Old Password :</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" id="password" name="oldpwd" Required > </input> <br><br>

                        <label for="newpwd">New password :</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" id="newpwd" name="newpwd"  
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters" Required></input>
                        <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"--> <br><br>

                        <label for="reenterpwd">Re-enter new password :</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" id="newrpwd" name="reenterpwd" Required ></input> 
                        <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"--><br><br>
                    </fieldset>

                    <button type="submit" id="delete" name="action" value="delete">Delete Account</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" id="submit" name="action" value="update">SUBMIT</button>
                </form><br>
            </div>
        </div>
        <div class="bottomBar">
            <div class="footer">
                <br><br>
                <a href="report.html">Report</a>&nbsp;|&nbsp;
                <a href="faq.html">FAQ</a>&nbsp;|&nbsp;
                <a href="contact.html">Contact Us</a>&nbsp;|&nbsp;
                <a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;
                <a href="help.html">Help</a>&nbsp;|&nbsp;
                <a href="abput.html">About</a>
                <div>
                    <br>
                    <img src="../img/facebook.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/twitter.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="../img/insta.png" height="50px" width="50px">&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </body>
</html>