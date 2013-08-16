$(document).ready(function(){

	$('#details').hide();

	$('#flip').click(function() {


		$("#flipBox").flip({
			direction:'rl',

			onEnd: function(){

				if($('#flip').text() == 'Details'){

					$('#label').hide();
					$('#details').show();
					$('#flip').text('Label');

				}else if($('#flip').text() == 'Label'){

					$('#details').hide();
					$('#label').show();
					$('#flip').text('Details');
					
				}

			}
		})


	});

	

});