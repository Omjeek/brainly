<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Gabung Brainly</h1>
    <hr>
    <p>Buat akun untuk mendapatkan jawaban dari pertanyaanmu lebih cepat</p>
    <form method="post" action="act/regis_action.php">
        <table>
        <tr>
            <td><input type="text" name="username" placeholder="Username"/></td>
        </tr>
        <tr>
            <td><input type="text" name="email" placeholder="Email"/></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Password" id="pass" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="fullname" placeholder="Fullname"/></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="MASUK">
            </td>
        </tr>
        <tr>
            <td>Sudah memiliki akun? <a href="login.php">Masuk</a></td>
        </tr>
        </table>
</form>
<script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
</html>