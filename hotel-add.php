<script src="<?php echo $base_url; ?>includes/ckeditor/ckeditor.js"></script>
<script src="<?php echo $base_url; ?>includes/ckfinder/ckfinder.js"></script>
<?php
ob_start();
?>
<form name="form1" method="post" action="">
  	  <label>Nama Hotel</label>
      <input type="text" name="namahotel" id="namahotel">
      <label>Bintang</label>
      <input type="text" name="bintang" id="bintang">
      <label>Provinsi</label>
      <select name="provinsi" class="required" id="selectBox">
                    
					<option value="">- please select -</option>
                    <?php
					$q=mysql_query("Select * from provinsi");
					while($r=mysql_fetch_array($q))
					{
					?>
					<option value="<?php echo $r['prov_auto']; ?>"><?php echo $r['prov_nama']; ?></option>
                    <?php
					}
					?>
				</select>
      <label>Alamat</label>
      <input type="text" name="alamat" id="alamat">
      <label>Feature Image (akan ditampilkan sebagai thumbnails)</label>
      <input type="text" name="photo" id="photo" onClick="window.open('<?php echo $base_url; ?>includes/imguploads/index.php','popuppage','width=600,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');">
      <input type="hidden" name="ext" id="ext" />
<input type="hidden" name="nfile" id="nfile" />
      <p></p>
      <input type="submit" class="btn btn-primary" name="button" id="button" value="Tambah">
</form>
<?php
if(isset($_POST["button"]))
{
	//$nid=_getautoinc("class");
	$rs=mysql_query("INSERT INTO `myhotel`.`hotel` (`nama_hotel`, `bintang`,`provinsi`,`alamat`, `gambar`) VALUES ('".$_POST['namahotel']."','".$_POST['bintang']."','".$_POST['provinsi']."','".$_POST['alamat']."','".$_POST['photo']."')");
	
}

ob_end_flush();
?>