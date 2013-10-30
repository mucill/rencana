@extends('layout')
@section('content')
<h1 class="page-header">
	Misi <a href="#myModal" data-toggle="modal" class="btn btn-sm btn-warning">Tambah</a>
</h1>
@if(count($misis) == 0)
<div class="alert alert-info">
	Belum Ada Data
</div>
@else
<div class="table-responsive">
	<table class="table table-hover">
		<thead>	
			<tr>
				<th>#</th>
				<th>Visi</th>
				<th>Misi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tfoot>	
			<tr>
				<th>#</th>
				<th>Visi</th>
				<th>Misi</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $i = 1 ;?>
			@foreach ($misis as $misi)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $misi->tahun . ' - '. $misi->visi }}</td>
				<td>{{ $misi->misi }}</td>
				<td width="15%">
					<a href="misi/destroy/{{ $misi->id_misi }}" class="btn btn-xs btn-warning delete">Hapus</a>
					<a href="misi/edit/{{ $misi->id_misi }}" class="btn btn-xs btn-default edit">Ubah</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<?php echo $misis->links(); ?>
@endif

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form action="misi/store" class="form-horizontal" role="form">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Misi</h4>
    </div>
    <div class="modal-body">
		<div class="form-group">
			<label for="tahun" class="col-lg-2 control-label">Visi</label>
			<div class="col-lg-10">
				@if (count($visis) > 0 )
				<select name="id_visi" id="id_visi" class="form-control">
					@foreach($visis as $visi)
					<option value="{{ $visi->id_visi }}">{{ $visi->tahun .' - '. $visi->visi }}</option>
					@endforeach
				</select>
				@else 
				<em class="text-muted">Belum Ada Data</em>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="misi" class="col-lg-2 control-label">Misi</label>
			<div class="col-lg-10">
				<textarea name="misi" id="misi" rows="3" class="form-control" required></textarea>
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