@extends('layouts.master')
@section('content')
<h1 class="demo-panel-title">
	Data Pengguna
</h1>
<hr/>
<div class="container-fluid">
	<div class="row-fluid">
		@if(isset($message))
		{{$message}}
		@endif
		{{ Form::open(array('action' => 'UsersController@store', 'class' => 'form-horizontal')) }}
		  	<div class="control-group {{ $errors->has('username') ? 'error' : '' }}">
		  		<label class="control-label" for="username">Username</label>
			    <div class="controls">
					<input class="input-xlager" type="text" name="username" id="username" value="{{ Input::old('username', isset($post) ? $post->username : null) }}" />
					{{ $errors->first('username', '<span class="help-inline">:message</span>') }}					
			    </div>
		  	</div>
		  	<div class="control-group">
		  		{{ Form::label('password', 'Password',array('class'=>'control-label')) }}
			    <div class="controls">
					{{Form::password('password','',array('placeholder'=>'Password','class'=>'input-xlarge'))}}
			    </div>
		  	</div>
		  	<div class="control-group">
		  		{{ Form::label('retype', 'Ketik Ulang',array('class'=>'control-label')) }}
			    <div class="controls">
					{{Form::password('retype','',array('placeholder'=>'Ketik Ulang Password','class'=>'input-xlarge'))}}
			    </div>
		  	</div>
		  	<div class="control-group">
		  		{{ Form::label('hak', 'Hak Akses',array('class'=>'control-label')) }}
			    <div class="controls">
					{{Form::select('hak', array('A' => 'Administrator', 'S' => 'SKPD', 'K' => 'Kecamatan'),'',array('class'=>'span3'))}}
			    </div>
		  	</div>

			<div class="control-group">
				<div class="controls">
					<button type="reset" class="btn btn-large">Reset</button>
					<button type="submit" class="btn btn-large btn-info">Simpan</button>
				</div>
			</div>
		{{ Form::close() }}		
	</div>
</div>

@stop