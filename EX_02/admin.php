<?php
$mot_de_passe = '2020';
if (isset($_POST['password']) AND $_POST['password'] == $mot_de_passe){
    header ('location: admin.php ');
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
