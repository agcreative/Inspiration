
	
	$dc = jQuery.noConflict();

	$dc(document).ready(function()
	{
	
		$dc('.swapProductImg').click(function()
		{
			//console.log('Rel: ' + $dc(this).attr('rel'));
			// 1. hide all main images
			var selectedImgId = $dc(this).attr('rel');
			$dc('#mainProductImg img').each(function()
			{
				//console.log("Hiding image #" + $dc(this).attr("id"));
				$dc(this).hide('fast'); //.find('#' + selectedImgId).show();
				
			});
			
			// 2. show selected image
			//console.log("Showing image #" + selectedImgId);
			$dc('#' + selectedImgId).show('fast');
			
			return false;
		});
		
		$dc.supersized({
			slides  :  	[ {image : 'http://www.inspirationfurniture.ca/wp-content/uploads/splash-bg.jpg'} ]
		});
		
	});
	