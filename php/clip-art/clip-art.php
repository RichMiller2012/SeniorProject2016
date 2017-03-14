<?php

$clip_art_array = array();

	$clip_art_dir = "img/clip-art";
	$clip_art_files = scandir($clip_art_dir);
	$clip_art_files = array_diff($clip_art_files, [".", ".."]);
	
	$used_clip_art_files = array();
		
	function getRandomFile(){
		global $clip_art_files;
		global $used_clip_art_files;
		global $clip_art_dir;
		
		$clip_art_count = count($clip_art_files);
		$used_clip_art_count = count($used_clip_art_files);
		
		$randomClipArtString = '';
		
		if($clip_art_count == $used_clip_art_count){
			$used_clip_art_files = array();
			$randomClipArtString = getRandomFileString($clip_art_files);
			array_push($used_clip_art_files, $randomClipArtString);
		} else {	
			do {
				$randomClipArtString = getRandomFileString($clip_art_files);
			} while(in_array($randomClipArtString, $used_clip_art_files, true));
			
			array_push($used_clip_art_files, $randomClipArtString);
		}
		
		return $clip_art_dir . '/' . $randomClipArtString;
	}
	
	function getRandomFileString($clip_art_files){
		return $clip_art_files[array_rand($clip_art_files)];
	}
	
?>