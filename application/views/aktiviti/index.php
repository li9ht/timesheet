
<h1>Senarai Aktiviti</h1>

<!-- output message berjaya dari flash data -->
<?php if($this->session->flashdata("message")):?>
	<div class="alert alert-success"><?php echo $this->session->flashdata("message") ?></div>
<?php endif; ?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Bil</th>
			<th>Ukmper</th>
			<th>Masa Mula</th>
			<th>Masa Tamat</th>
			<th>Jumlah Jam</th>
			<th>Aktiviti</th>
			<th>Modul</th>
			<th>Kategori</th>
			<th>Status</th>
			<th>Isu</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<?php foreach ($activities as $activity) : ?>
		<tr>
			<td><?php echo $activity->id; ?></td>
			<td><?php echo $activity->ukmper; ?></td>
			<td><?php echo $activity->masa_mula; ?></td>
			<td><?php echo $activity->masa_tamat; ?></td>
			<td><?php echo $activity->jumlah_jam; ?></td>
			<td><?php echo $activity->aktiviti; ?></td>
			<td><?php echo $activity->modul; ?></td>
			<td><?php echo $activity->kategori; ?></td>
			<td><?php echo $activity->status; ?></td>
			<td><?php echo $activity->isu; ?></td>
			<td><?php echo anchor("aktiviti/hapus/".$activity->id,"Hapus",'class="btn btn-danger"') ?></td>
		</tr>
	<?php endforeach; ?>
</table>