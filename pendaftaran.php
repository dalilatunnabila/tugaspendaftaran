<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h3>Pendaftaran siswa smkn 1 sayung</h3>
    <form action="prosesdaftar.php" method="post">
    <table border=0>
<tr>
    <td>Nama Lengkap:</td>
    <td><input type="text" name="nama" /></td>
</tr>
<tr>
    <td>Tempat Lahir:</td>
    <td><input type="text" name="tempat" /></td>
</tr>
<tr>
    <td>Tanggal Lahir:</td>
    <td><input type="date" name="tanggal" /></td>
</tr>
<tr>
    <td>Jenis Kelamin:</td>
    <td><input type="radio" name="sex" value="Pria" />Pria</td>
    <td><input type="radio" name="sex" value="Wanita" />Wanita </td>
</tr>
<tr>
    <td>Alamat:</td>
    <td><input type="text-area" name="alamat" /></td>
</tr>
<tr>
    <td>Agama:</td>
    <td><select name="religion"> 
    <option value="islam">islam
    <option value="kristen">kristen
    <option value="budha">budha
    <option value="hindhu">hindhu
    <option value="katolik">katolik
</select> </td>
</tr>
<tr>
    <td><input type="reset" value="ulangi"> <br /></td>
    <td><input type="submit" value="submit"> <br /></td>
</tr>
</from>                                                                                                                                                                                                                                                                                                                          
</body>
</html>