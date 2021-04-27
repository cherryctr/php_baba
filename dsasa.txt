<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Part 1</title>
</head>

<body>
    <h1>Form Handling Part 1</h1>

    <form action="hasil.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama Lengkap</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="email" id="email" placeholder="Email Address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">gender</label>
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="radio" name="gender" id="gender" value="male"> Male
                    <input type="radio" name="gender" id="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">Image</label>
                </td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
                <td valign="top">
                    <label for="pesan">Message</label>
                </td>
                <td valign="top">
                    :
                </td>
                <td>
                    <textarea name="pesan" id="pesan" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Send">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>