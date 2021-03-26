<?php

class template {
	private $path;
	public function __construct( $directory = null ) {
		if (! $directory):
			// Use the current file's path relatively.
			$directory = dirname( __FILE__ ) . '../../templates'; 
		endif;
		$this->path = (string) $directory;
	}
	public function load( $filename, $extension = 'php' ) {
		$file = $this->path . '/' . "$filename.$extension";
		include $file;
	}
}

?>