<script src="<?php echo $base_url; ?>includes/ckeditor/ckeditor.js"></script>
<script src="<?php echo $base_url; ?>includes/ckfinder/ckfinder.js"></script>
<?php
ob_start();
?>
<form name="form1" method="post" action="">
 	<label>Provinsi</label>

<input type="text" name="nama" id="nama" />      
<p></p>
      <input type="submit" class="btn btn-primary" name="button" id="button" value="Tambah">
</form>
<script type="text/javascript">

// This is a check for the CKEditor class. If not defined, the paths must be checked.
		</script>
<?php
if(isset($_POST["button"]))
{
	
	$rs=mysql_query("INSERT INTO `myhotel`.`provinsi` (`prov_nama`) VALUES ('".$_POST['nama']."')");

}
ob_end_flush();
?>