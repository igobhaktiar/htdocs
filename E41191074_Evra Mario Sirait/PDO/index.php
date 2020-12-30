<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM user");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD PDO </title>
</head>
<body bgcolor="#CCCCCC">
<h2><strong><p align="center">Data User</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" bgcolor="#00FFFF">id_user</td>
    <td width="175" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="250" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Pekerjaan</td>
    <td width="135" align="center" valign="middle" bgcolor="#00FFFF"><a href="create.php">TAMBAH</a></td></tr>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['id_user'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                    <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF"><?php echo $value['pekerjaan'] ?></td>
                    <td p align="center" bgcolor="#FFFFFF">
                        <a href="edit.php?id_user=<?php echo $value['id_user']?>">Edit</a>
                        <a href="delete.php?id_user=<?php echo $value['id_user']?>">Delete</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>
<p align="center"><a href=http://www.javanetmedia.com>www.javanetmedia.com</a></p>
</body>
</html>