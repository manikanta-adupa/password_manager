<!DOCTYPE html>

<html>
    <head><link rel="stylesheet" href="pass_sh.css"></head>
    <body>
        <form action="pass_sh.php" method="post" name="application" id="application">
            <br>
            Username_Password_Manager: <input name="username_password_manager" type="text" value="">
            <br><br>
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

            </table>

            <input type="submit" id="submit-btn1" name="submit-btn1">
            
        </form> <br>
        <div>
        <?php
            $db = new mysqli('localhost','root','','user_info') or die("Nope.");
            if (isset($_POST['list'])) 
            {
                $application = $_POST["list"];
                $username = $_POST["username_password_manager"];
                $quarry2="select username,password from users where username_password_manager='$username' and application='$application[0]'";
                if($result = mysqli_query($db, $quarry2))
                {
                    if(mysqli_num_rows($result) > 0)
                    {
                        echo "<table>";
                            echo "<tr>";
                                echo "<th>username</th>";
                                echo "<th>password</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                        mysqli_free_result($result);
                    } 
                    else
                    {
                        echo "No records matching your query were found.";
                    }
                } 
                else
                {
                    echo "ERROR: Could not able to execute $quarry2. " . mysqli_error($db);
                }
        }
        ?>
        </div>
        
        <button><a id="next" href="http://localhost/WT/pass_in.php">Input Password</a></button>
        <button><a id="next" href="http://localhost/WT/index.html">Return</a></button>
        <script src="pass_sh.js"></script>
    </body>
</html>