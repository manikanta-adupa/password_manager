<!DOCTYPE html>

<html>
    <head><link rel="stylesheet" href="pass_in.css"></head>
    <body>
        <div class="container">
        <form action="pass_in.php" method="post" name="application" id="application">

            <p id="test">Username_Password_Manager: <input type="text" name="username_password_manager"><br><br></p>

            <table border='0' width='250' cellspacing='0' cellpadding='0' align=center>

                <tr id="main">
                    <td>   
                    </td>
                    <td>
                        <b>Choice</b>
                    </td>
                </tr>
                
                <tr id="even">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Google" onclick='limit()'>
                    </td>
                    <td>
                        Google
                    </td>
                </tr>

                <tr id="odd">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Microsoft" onclick='limit()'>
                    </td>
                    <td>
                        Microsoft
                    </td>
                </tr>

                <tr id="even">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Netflix" onclick='limit()'>
                    </td>
                    <td>
                        Netflix
                    </td>
                </tr>

                <tr id="odd">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Amazon Prime" onclick='limit()'>
                    </td>
                    <td>
                        Amazon Prime
                    </td>
                </tr>

                <tr id="even">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Disney HotStar" onclick='limit()'>
                    </td>
                    <td>
                        Disney HotStar
                    </td>
                </tr>

                <tr id="odd">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Valve Steam" onclick='limit()'>
                    </td>
                    <td>
                        Valve Steam
                    </td>
                </tr>

                <tr id="even">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Epic Game Store" onclick='limit()'>
                    </td>
                    <td>
                        Epic Game Store
                    </td>
                </tr>

                <tr id="odd">
                    <td>
                        <input type=checkbox id=chackbox_application name="list[]" value="Apple ID" onclick='limit()'>
                    </td>
                    <td>
                        Apple ID
                    </td>
                </tr>

            </table><br>
            Username: <input type="text" name="username"> <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Password: <input type="text" name="password">
            <input type="submit" id="submit-btn1">
        </form>
        <p id="a"></p>
</div>
        <?php
            $db = new mysqli('localhost','root','','user_info') or die("Nope.");
            if (isset($_POST['list'])) 
            {    
                $application = $_POST["list"];
                $username_P = $_POST["username_password_manager"];
                $username = $_POST["username"];
                $password = $_POST["password"];
            
                $quarry1="insert into users values ('$username_P','$application[0]','$username','$password','#01345110')";
                if(mysqli_query($db,$quarry1))
                    echo 'password has been saved <br>';
            }
        ?>
        <button id="next"><a href="http://localhost/WT/pass_sh.php">stored passwords</a></button>
        <button id="next"><a href="http://localhost/WT/index.html">return</a></button>
        <script src="pass_in.js"></script>
    </body>
</html>

