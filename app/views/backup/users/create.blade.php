@extends('layouts.master')
@section('content')
<h1 class="demo-panel-title">
	Data Pengguna
</h1>
<hr/>
<div class="container-fluid">
	<div class="row-fluid">
		{{ Form::open(array('action' => 'UsersController@store', 'class' => 'form-horizontal')) }}
		  	<div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
		  		<label class="control-label" for="username">Username</label>
			    <div class="controls">
					<input placeholder="Username" class="input-xlager" type="text" name="username" id="username" value="{{ Input::old('username', isset($post) ? $post->username : null) }}" />
					{{ $errors->first('username', '<span class="help-inline">:message</span>') }}					
			    </div>
		  	</div>
		  	<div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
		  		<label class="control-label" for="password">Password</label>
			    <div class="controls">
					<input placeholder="Password" class="input-xlager" type="password" name="password" id="password" value="{{ Input::old('password', isset($post) ? $post->password : null) }}" />
					{{ $errors->first('password', '<span class="help-inline">:message</span>') }}					
			    </div>
		  	</div>
		  	<div class="control-group {{{ $errors->has('retype') ? 'error' : '' }}}">
		  		<label class="control-label" for="retype">Ketik Ulang Password</label>
			    <div class="controls">
					<input placeholder="Retype Password" class="input-xlager" type="password" name="retype" id="retype" value="{{ Input::old('retype', isset($post) ? $post->retype : null) }}" />
					{{ $errors->first('retype', '<span class="help-inline">:message</span>') }}					
			    </div>
		  	</div>
		  	<div class="control-group">
		  		{{ Form::label('hak', 'Hak Akses',array('class'=>'control-label')) }}
			    <div class="controls">
					{{Form::select('hak', array(
											'admin' => 'Administrator', 
											'skpd' => 'SKPD', 
											'kecamatan' => 'Kecamatan'),'',array('class'=>'span3'))}}
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