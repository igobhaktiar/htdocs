<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nis = htmlentities($_POST['id_user']);
  $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $kelas = htmlentities($_POST['pekerjaan']);
        $query = $db->prepare("INSERT INTO `user`(`id_user`,`nama`, `alamat`, `pekerjaan`)
        VALUES (:id_user,:nama,:alamat,:pekerjaan)");
  $query->bindParam(":id_user", $id_user);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":pekerjaan", $pekerjaan);
        $query->execute();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
  <title>CRUD PDO </title>
    </head>
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">id_user</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="id_user" type="text" size="10">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Pekerjaan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="pekerjaan">
    <option selected="selected">--Pilih--</option>
  <option>Mahasiswa</option>
  <option>Pengangguran</option>
  <option>Wiraswasta</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="TAMBAH"></td>
  </tr>
</table>
</form><p align="center"><a href=http://www.javanetmedia.com>www.javanetmedia.com</a></p>
</body>
</html>