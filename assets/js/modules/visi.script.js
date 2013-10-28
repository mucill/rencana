$(function(){
	
	$('form').on('submit', function(e){
		e.preventDefault();	
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			dataType: 'html',
			data: $(this).serialize(),
			beforeSend: function(){
				$('#process').toggleClass('hidden');
			},
			success: function(data){
				if(data == 'error')
				{
					$('#process').html('Error While Processing');
				} else {
					$('#process').toggleClass('hidden');
					$('#myModal').modal('hide');
					window.location.reload(true);					
				}
			}
		});
	});

	$('.delete').on('click', function(e){
		e.preventDefault();
		if(confirm('Yakin ingin menghapus data ini ?'))
		{
			$.ajax({
				type: 'GET',
				url: $(this).attr('href'),
				dataType: 'html',
				success: function(data){
					if(data == 'error')
					{
						alert('Error While Processing');
						return false;
					} else {
						window.location.reload(true);					
					}
				}
			});			
		} else {
			return false;
		}
	});

	$('.edit').on('click', function(e){
		e.preventDefault();
		$('#myModal').modal('show');
		$.get($(this).attr('href'), function(data){
			var obj = jQuery.parseJSON(data);
			$('#myModal form').attr('action','visi/update/' + obj.id);
			$('#myModal input[name=tahun]').val(obj.tahun);
		});			

	}) 

	$('.actived').on('click', function(e){
		e.preventDefault();
		if(confirm('Yakin ingin mengaktifkan data ini ?'))
		{
			$.ajax({
				type: 'GET',
				url: $(this).attr('href'),
				dataType: 'html',
				success: function(data){
					if(data == 'error')
					{
						alert('Error While Processing');
						return false;
					} else {
						window.location.reload(true);					
					}
				}
			});			
		} else {
			return false;
		}

	});

})