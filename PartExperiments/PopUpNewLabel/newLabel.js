$(document).ready(function(){

	$('#details').hide();
	$('#notes').hide();
	$('#label').show();

	$('#flip').click(function() {


		$("#flipBox").flip({
			direction:'rl',
			color: 'rgb(223, 213, 192)',

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

	$('#bNote').click(function(){


		$('#notes').toggle("blind", 200);


	});


});