<?php
	

	if (! defined( 'default_array' ) ) define( 'default_array', $_GET );
	
	/** 
	 * Checks if the [$string](key) is present inside the [$array](array) using the 
	 * `isset` method.
	 * - Works for associative arrays only.
	 * @param string	$string		The key to be checked in the array.
	 * @param array		$array		The array in which the key to be checked.
	 * @param bool		$e_check	If set to true this will apply the `NOT EMPTY` check.
	 * 
	 * - More reference.
	 * @link	http://docs.webopedia.com/stdlib/standalone/functions#insane
	 */
	function insane( $string, $array = default_array, $e_check = false ) {
		if (  is_array( $array ) && isset( $array[$string] )) {
			if ( $e_check === true && empty( $array[$string] ) ) {
				return false;
			}
			return true;
		}
		return false;
	}

	/** 
	 * Checks if the [$string](key) is present inside the [$array](array) using the 
	 * `insane` method on line #15 plus it matches the value of that array with the 
	 * specified [$value](value).
	 * - Works for associative arrays only.
	 * @param string	$string		The key to be checked in the array.
	 * @param mixed		$value		The value to be matched with the one in the array.
	 * @param array		$array		The array in which the key to be checked.
	 * @param bool		$strict		If set to true this will apply the `NOT EMPTY` check.
	 * 
	 * - More reference.
	 * @link	http://docs.webopedia.com/stdlib/standalone/functions#mvsane
	 */
	function mvsane( $string, $value, $array = default_array, $strict = false ) {
		if ( insane( $string, $array ) ) {
			if ( $array[$string] == $value ) {
				return true;
			}
		}
		return false;
	}

	/** 
	 * Checks if the [$string](key) is present inside the [$array](array) using the 
	 * `insane` method on line #15 plus it returns the [return](value) for the 
	 * [$string](key) in the [$array](array).
	 * - Works for associative arrays only.
	 * @param string	$string		The key to be checked in the array.
	 * @param string	$type		The type of value to be matched with the one in the 
	 * 								array.
	 * @param array		$array		The array in which the key to be checked.
	 * @param bool		$strict		If set to true this will apply the `NOT EMPTY` check.
	 * 
	 * - More reference.
	 * @link	http://docs.webopedia.com/stdlib/standalone/functions#gtsane
	 */
	function gtsane( $string, $array = default_array, $strict = false ) {
		if ( insane( $string, $array, $strict ) ) {
			return $array[$string];
		}
		return false;
	}

	/** 
	 * Generates a random one-time value to prevent the resource caching by the browser. 
	 * This needs to be set with the resource link in the DOM structure of the hypter text 
	 * document.
	 * @param bool		$echo		If set to true this will print the generated value.
	 * @param bool		$version	If set to true this will add give the return a value 
	 * 								the structure of URL query.
	 */
	function no_cache($version = true, $echo = true, $algo = 'md5') {
		$cache_version = hash( $algo, time() );
		$cache_version = ($version === true ? '?ver=' . $cache_version : $cache_version);
		print( $echo === true ? $cache_version : null );
		return $cache_version;
	}

	function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR')) // Returns [::1]
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'unknown';
		return $ipaddress;
	}

	function trim_url( $url, $query = true, $frags = true ) {
		$url = str_replace( '.php', '', $url );
		$url = str_replace( '.html', '', $url );
		$url = str_replace( '.htm', '', $url );
		$url = str_replace( '.asp', '', $url );
		$url = str_replace( '.aspx', '', $url );

		// Removing protocols from the URL.
		if ( strpos( $url, 'https' ) !== false ) $url = str_replace( 'https://', '', $url );
		else if ( strpos( $url, 'http' ) !== false ) $url = str_replace( 'http://', '', $url );
		
		// Removing domain name from the URL.
		$url = substr( $url, strpos( $url, "/" ) );
		
		// Removing fragments from the URL.
		if ( $frags === true AND strpos( $url, '#' ) !== false ) $url = substr($url, 0, strpos($url, '#'));
		
		// Removing query from the URL.
		if ( $query === true AND strpos( $url, '?' ) !== false ) $url = substr($url, 0, strpos($url, '?'));
		
		return $url;
	}
?>