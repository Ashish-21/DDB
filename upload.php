<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$folderName=$_FILES['userImage']['tmp_name'];
$targetPath = "images/".$_FILES['userImage']['name'];
$type=pathinfo($targetPath,PATHINFO_EXTENSION);
$data=file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
<?php
}
}
}
?>