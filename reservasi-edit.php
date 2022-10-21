<script src="../../includes/ckeditor/ckeditor.js"></script>
<script src="../../includes/ckfinder/ckfinder.js"></script>
   <script>
$(function() {
$("#datepicker").datepicker({        
		 dateFormat: "dd-mm-yy",
    });
});
 $(function() {
$("#datepicker2").datepicker({        
		 dateFormat: "dd-mm-yy",
    });
});
</script>

<style>
.ui-datepicker td {
    border: 1px solid #CCC;
    padding: 0;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    border: solid #FFF;
    border-width: 1px 0 0 1px;
}
#recaptcha_image img {
      width: 200px;
      
    } 
</style>

<?php
ob_start();
if(isset($_GET['id']))
{

	$q=mysql_query("Select * from reservations where sha1(idreservation)='".$_GET['id']."'");
			$r=mysql_fetch_array($q);
}
?>
<form name="form1" method="post" action="">
  	  <label>No. Reservasi</label>
      <input type="text" name="res" id="res" value="<?php echo $r['idreservation']; ?>">
      <label>Nama</label>
      <input type="text" name="harga" id="harga" value="<?php echo $r['name']; ?>">
      <label>No. Identitas</label>
      <input type="text" name="harga" id="harga" value="<?php echo $r['identify_value']; ?>">
      <fieldset class="col_f_2">
				<label>Tanggal Bayar (yyyy/mm/dd)</label><input name="tgl" type="date" id="tgl" >
			</fieldset>
             <p></p>
      <input type="submit" class="btn btn-primary" name="button" id="button" value="Update">

            </form>
		<?php
if(isset($_POST["button"]))
{
	$nid=$_GET['act'];
	$rs=mysql_query("insert into pembayaran (idreservasi,tglbayar) values ('".$_POST['res']."','".$_POST['tgl']."')");
	
	_direct("?=reservasi");

}
ob_end_flush();
?>
