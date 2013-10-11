<?php echo form_open('aktiviti/simpan/'.$aktivitiDetail->id, array('class' => 'form-horizontal','role'=>'form')); ?>
	
	<legend>Aktiviti Baru</legend>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Ukmper</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->ukmper ?>
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Masa Mula</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->masa_mula ?>	
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Masa Tamat</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->masa_tamat ?>	
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Jumlah Jam</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->jumlah_jam ?>	
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Akviti</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->aktiviti ?>	
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Modul</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->modul ?>	
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Kategori</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->kategori ?>	
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Status</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->status ?>	
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Isu</label>
		<div class="col-lg-5">
			<?php echo $aktivitiDetail->isu ?>	
		</div>		
	</div>
	
	<!-- btn action -->
	<div class="form-group">
		 <div class="col-lg-offset-2 col-lg-5">
			<?php echo anchor("aktiviti/","Kembali",'class="btn btn-default"') ?>
			<?php echo anchor("aktiviti/kemaskini/".$aktivitiDetail->id,"Kemaskini",'class="btn btn-primary"') ?>
			<?php echo anchor("aktiviti/hapus/".$aktivitiDetail->id,"Hapus",'class="btn btn-danger"') ?>
		</div>
	</div>

</form>