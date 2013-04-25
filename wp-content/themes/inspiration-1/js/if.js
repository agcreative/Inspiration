	
	var set_1_ctr = 1;
	var set_2_ctr = 1;
	var set_3_ctr = 1;
	var set_4_ctr = 1;
	var set_5_ctr = 1;
	
	var MAX_1 = 9;
	var MAX_2 = 9;
	var MAX_3 = 9;
	var MAX_4 = 9;
	var MAX_5 = 9;
	
	prevIndex1 = 0;
	prevIndex2 = 0;
	prevIndex3 = 0;
	prevIndex4 = 0;
	prevIndex5 = 0;
	
	function getSet()
	{
		//return a random integer between 0 and 10
		var setNumber = Math.floor(Math.random()*5)+1;
		return setNumber;
	}
	
	function init()
	{
		$dc("#set_1 img").each(function() { $dc(this).hide(); } );
		$dc("#set_2 img").each(function() { $dc(this).hide(); } );
		$dc("#set_3 img").each(function() { $dc(this).hide(); } );
		$dc("#set_4 img").each(function() { $dc(this).hide(); } );
		$dc("#set_5 img").each(function() { $dc(this).hide(); } );
		
		setInterval(function()
		{
			// 1.  select a random number
			var setNumber = getSet();
			//console.log("Random number: " + setNumber);
			
			// 2.  user the random number to create the set name
			var setName = "set_" + setNumber + "_img_";
			//console.log("Set name: " + setName);
			
			// 3.  call the switch statement
			switch(setName)
			{
				case 'set_1_img_':
					if (set_1_ctr == 0) { prevIndex1 = MAX_1; } else { prevIndex1 = set_1_ctr-1; }
					$dc("#" + setName + prevIndex1).fadeOut(1000);
					$dc("#" + setName + set_1_ctr).fadeIn(1000);
					if (set_1_ctr == MAX_1) { set_1_ctr = 0; } 
					else { set_1_ctr++; }
					break;
					
				case 'set_2_img_':
					if (set_2_ctr == 0) { prevIndex2 = MAX_2; } else { prevIndex2 = set_2_ctr-1; }
					$dc("#" + setName + prevIndex2).fadeOut(1000);
					$dc("#" + setName + set_2_ctr).fadeIn(1000);
					if (set_2_ctr == MAX_2) { set_2_ctr = 0; } 
					else { set_2_ctr++; }
					//$dc("#set_2").css("background-image", "none");
					break;
					
				case 'set_3_img_':
					if (set_3_ctr == 0) { prevIndex3 = MAX_3; } else { prevIndex3 = set_3_ctr-1; }
					$dc("#" + setName + prevIndex3).fadeOut(1000);
					$dc("#" + setName + set_3_ctr).fadeIn(1000);
					if (set_3_ctr == MAX_3) { set_3_ctr = 0; } 
					else { set_3_ctr++; }
					//$dc("#set_3").css("background-image", "none");
					break;
					
				case 'set_4_img_':
					if (set_4_ctr == 0) { prevIndex4 = MAX_4; } else { prevIndex4 = set_4_ctr-1; }
					$dc("#" + setName + prevIndex4).fadeOut(1000);
					$dc("#" + setName + set_4_ctr).fadeIn(1000);
					if (set_4_ctr == MAX_4) { set_4_ctr = 0; } 
					else { set_4_ctr++; }
					//$dc("#set_4").css("background-image", "none");
					break;
					
				case 'set_5_img_':
					if (set_5_ctr == 0) { prevIndex5 = MAX_5; } else { prevIndex5 = set_5_ctr-1; }
					$dc("#" + setName + prevIndex5).fadeOut(1000);
					$dc("#" + setName + set_5_ctr).fadeIn(1000);
					if (set_5_ctr == MAX_5) { set_5_ctr = 0; } 
					else { set_5_ctr++; }
					break;
			}
  		}, 1000);
	}
	
	$dc(document).ready(function() {
		init(); // load up the cycler and the map
	});