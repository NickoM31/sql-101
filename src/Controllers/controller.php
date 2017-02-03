<?php 
	public static function show($id){
		$sock = Armoire::get($id);
		self::view('details', ['sock'=>$sock]);
	}
	
	?>