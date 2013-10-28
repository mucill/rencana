@extends('layout')
@section('content')
<h1 class="page-header">
	Tahun <a href="#myModal" data-toggle="modal" class="btn btn-sm btn-warning">Tambah</a>
</h1>
@if(count($tahuns) == 0)
<div class="alert alert-info">
	Belum Ada Data
</div>
@else
<div class="table-responsive">
	<table class="table table-hover">
		<thead>	
			<tr>
				<th>#</th>
				<th>Tahun</th>
				<th>Aktif</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tfoot>	
			<tr>
				<th>#</th>
				<th>Tahun</th>
				<th>Aktif</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $i = 1 ;?>
			@foreach ($tahuns as $tahun)
			@if ($tahun->active > 0)
			<tr class="active">
			@else
			<tr>
			@endif
				<td>{{ $i++ }}</td>
				<td>{{ $tahun->tahun }}</td>
				@if ($tahun->active > 0)
				<td><span class="glyphicon glyphicon-ok-sign"></span> Ya</td>
				<td width="15%">
					<a href="#" class="btn btn-xs btn-warning delete" disabled>Hapus</a>
					<a href="#" class="btn btn-xs btn-default edit" disabled>Ubah</a>
				</td>
				@else
				<td><span class="glyphicon glyphicon-remove-circle"></span> Tidak</td>
				<td width="15%">
					<a href="tahun/destroy/{{ $tahun->id_tahun }}" class="btn btn-xs btn-warning delete">Hapus</a>
					<a href="tahun/edit/{{ $tahun->id_tahun }}" class="btn btn-xs btn-default edit">Ubah</a>
					@if ($tahun->active <= 0)
					<a href="tahun/actived/{{ $tahun->id_tahun }}" class="btn btn-xs btn-default actived">Aktifkan</a>
					@endif
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<?php echo $tahuns->links(); ?>
@endif

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form action="tahun/store" class="form-horizontal" role="form">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Tahun</h4>
    </div>
    <div class="modal-body">
		<div class="form-group">
			<label for="tahun" class="col-lg-2 control-label">Tahun</label>
			<div class="col-lg-10">
				<input type="number" name="tahun" class="form-control" value="{{ date('Y') }}" required>
			</div>
		</div>
    </div>
    <div class="modal-footer">
		<div id="process" class="pull-left hidden fade in">Process ...</div>
		<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		<button type="submit" class="btn btn-warning">Simpan</button>
    </div>
  </div>
</div>
</form>
</div>

@stop