<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Selamat datang kembali</h1>
    <hr>
    <p>Dapatkan jawaban dalam hitungan menit sehingga dirimu dapat menyelesaikan tugas lebih cepat</p>
    <form method="post" action="act/actLogin.php">
        <table>
        <tr>
            <td><input type="text" name="email" placeholder="Email"/></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Kata Sandi" id="pass" required /></td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="MASUK">
            </td>
           </tr>
           <tr>
            <td><input type="checkbox" >Saya ingin tetap masuk</td>
            <td><a href="#" >Lupa kata sandi Anda?</a></td>
          </tr>
          <tr>
            <td>Belum punya akun? <a href="regis.php">Mendaftar</a></td>
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