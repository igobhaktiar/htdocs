<?php
    include 'koneksi.php';
    if(!isset($_GET['id_user'])){
        die("Error: id_user Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM `user` WHERE id_user = :id_user");
    $query->bindParam(":id_user", $_GET['id_user']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: id_user Tidak Ditemukan");
    }else{
        $data = $query->fetch();
    }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $kelas = htmlentities($_POST['pekerjaan']);
        $query = $db->prepare("UPDATE `user` SET `nama`=:nama,`alamat`=:alamat,`pekerjaan`=:pekerjaan WHERE id_user=:id_user");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":pekerjaan", $pekerjaan);
        $query->bindParam(":id_user", $_GET['id_user']);
        $query->execute();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
 <title>CRUD PDO </title>
    <meta charset="utf-8">
    </head>
 <body bgcolor="#CCCCCC">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post">
 <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">id_user</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="id_user" value="<?php echo $data['id_user'] ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $data['alamat'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">pekerjaan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
  <input name="pekerjaan" type="text" size="50" value="<?php echo $data['pekerjaan'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="EDIT"></td>
  </tr>
  </table>
  </form><p align="center"><a href=http://www.javanetmedia.com>www.javanetmedia.com</a></p>
  </body>
</html>