@extends('layout')
@section('content')
<h1 class="page-header">
	Visi <a href="#myModal" data-toggle="modal" class="btn btn-sm btn-warning">Tambah</a>
</h1>
@if(count($visis) == 0)
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
				<th>Tahun</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tfoot>	
			<tr>
				<th>#</th>
				<th>Visi</th>
				<th>Tahun</th>
				<th>Aksi</th>
			</tr>
		</tfoot>
		<tbody>
			<?php $i = 1 ;?>
			@foreach ($visis as $visi)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $visi->visi }}</td>
				<td>{{ $visi->tahun }}</td>
				<td width="15%">
					<a href="visi/destroy/{{ $visi->id_visi }}" class="btn btn-xs btn-warning delete">Hapus</a>
					<a href="visi/edit/{{ $visi->id_visi }}" class="btn btn-xs btn-default edit">Ubah</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<?php echo $visis->links(); ?>
@endif

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form action="visi/store" class="form-horizontal" role="form">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Visi</h4>
    </div>
    <div class="modal-body">
		<div class="form-group">
			<label for="visi" class="col-lg-2 control-label">Visi</label>
			<div class="col-lg-10">
				<textarea name="visi" id="visi" rows="3" class="form-control" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="tahun" class="col-lg-2 control-label">Digunakan Tahun</label>
			<div class="col-lg-10">
				<select name="tahun" id="tahun" class="form-control">
					<option value="2013">2013</option>
					<option value="2013">2014</option>
					<option value="2013">2015</option>
				</select>
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