

<?php echo validation_errors() ?>

<?php echo form_open('aktiviti/simpan', array('class' => 'form-horizontal','role'=>'form')); ?>
	
	<legend>Aktiviti Baru</legend>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Ukmper</label>
		<div class="col-lg-5">
			<input class="form-control" type="text" name="ukmper" placeholder="Ukmper" value="<?php echo set_value("ukmper",$aktivitiDetail->ukmper);?>">
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Masa Mula</label>
		<div class="col-lg-5">
			<input class="form-control" type="text" name="masa_mula" placeholder="Masa Mula" value="<?php echo set_value("masa_mula",$aktivitiDetail->masa_mula);?>">
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Masa Tamat</label>
		<div class="col-lg-5">
			<input class="form-control" type="text" name="masa_tamat" value="<?php echo set_value("masa_tamat",$aktivitiDetail->masa_tamat);?>" placeholder="Masa tamat">
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Jumlah Jam</label>
		<div class="col-lg-5">
			<input class="form-control" type="text" name="jumlah_jam" value="<?php echo set_value("jumlah_jam",$aktivitiDetail->jumlah_jam);?>" placeholder="1jam">
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Akviti</label>
		<div class="col-lg-5">
			<textarea class="form-control" type="text" name="aktiviti" placeholder="Aktiviti"><?php echo set_value("aktiviti",$aktivitiDetail->aktiviti);?></textarea>
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Modul</label>
		<div class="col-lg-5">
			<input class="form-control" type="text" name="modul" placeholder="Modul" value="<?php echo set_value("modul",$aktivitiDetail->modul);?>">
		</div>		
	</div>

	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Kategori</label>
		<div class="col-lg-5">
			<?php
			//dropdown options
			$kategori_option = array(
				'Projek Baru' => 'Projek Baru',
				'PEKA' => 'PEKA',
				'Bengkel' => 'Bengkel',
				'Mesyuarat' => 'Mesyuarat'
			);
			//generate from option and set default value
			echo form_dropdown('kategori', $kategori_option, $aktivitiDetail->kategori,'class="form-control"');
			?>
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Status</label>
		<div class="col-lg-5">
			<?php
			//dropdown options
			$status_option = array(
				'Siap' => 'Siap',
				'Tidak Siap' => 'Tidak Siap'
			);
			//generate from option and set default value
			echo form_dropdown('status', $status_option, $aktivitiDetail->status,'class="form-control"');
			?>
		</div>		
	</div>
	<div class="form-group">
		<label for="" class="col-lg-2 control-label">Isu</label>
		<div class="col-lg-5">
			<textarea class="form-control" type="text" name="isu" placeholder="isu"><?php echo set_value("isu",$aktivitiDetail->isu);?></textarea>
		</div>		
	</div>
	
	<!-- btn save -->
	<div class="form-group">
		 <div class="col-lg-offset-2 col-lg-2">
			<input type="submit" name="kemaskini" value="Save" class="btn btn-primary">
		</div>
	</div>

</form>