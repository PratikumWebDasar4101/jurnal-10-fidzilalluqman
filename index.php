    <?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <table border="1" align="center" style="margin-top: 15%; background: "bac>
        <tr>
            <td>   
    <form method="POST">
        <table align="center">
            <th colspan="2"><center><h3>LOGIN</h3></center></th>
            <tr>
                <td colspan="2">
                <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                     </div>
                </td>
            </tr>
                <tr>
                <td colspan="2">
                <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                     </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="register.php">
                      <input type="submit" class="btn btn-primary" value="REGISTER"></input></a>   
                </td>
                <td align="right">
                    <input type="submit" class="btn btn-primary" value="LOGIN"></input>
                </td>
            </tr>
        </table>
    </form>
        </tr>
            </td>
    </table>
</body>
</html>
<?php
    if (isset($_POST['username'])) {
        $username   = $_POST['username'];
        $password   = ($_POST['password']);

        $sql = "SELECT * FROM akun 
                WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->conn,$sql);
        
        if (mysqli_num_rows($result) == 0 ) {
            ?>
                <script>
                    alert("GAGAL LOGIN!");
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("LOGIN BERHASIL!");
                    location = "dashboard.php";
                </script>
            <?php
        }
    }
?>
