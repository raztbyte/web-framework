<?php

class securityRSRC {

	protected function keysRSRC($objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		$cipher 		  				= 'ChaCha20';
		$keys 			  				= hash_hmac('Sha512', strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit[''], $objectkeys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$option 		  				= 8;
		$iv 			  				= openssl_cipher_iv_length($cipher);
		$result 		  				= openssl_encrypt(hash_hmac('Sha512', $objectkeys, $keys), $cipher, $keys, $option, $iv);

		$cipher 		  				= 'AES-256-CBC';
		$keys 			  				= hash_hmac('Sha512', strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit[''], $objectkeys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$option 		  				= 8;
		$iv 			  				= openssl_cipher_iv_length($cipher);
		$result 		  				= openssl_encrypt(hash_hmac('Sha512', $result, $keys), $cipher, $keys, $option, $iv);

		$cipher 		  				= 'AES-256-CBC';
		$keys 			  				= hash_hmac('Sha512', strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit[''], $objectkeys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$option 		  				= 8;
		$iv 			  				= openssl_cipher_iv_length($cipher);
		$result 		  				= openssl_encrypt(hash_hmac('Sha512', $result, $keys), $cipher, $keys, $option, $iv);

		$cipher 		  				= 'ChaCha20';
		$keys 			  				= hash_hmac('Sha512', strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit[''], $objectkeys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$keys 			  				= hash_hmac('Sha512', strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit[''], $keys);
		$option 		  				= 8;
		$iv 			  				= openssl_cipher_iv_length($cipher);
		$result 		  				= openssl_encrypt(hash_hmac('Sha512', $result, $keys), $cipher, $keys, $option, $iv);

						    			  return $result;

	}

	protected function cryptoRSRC($method, $object, $objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		if($method == 'encrypto') {

			$cipher 	  				= 'ChaCha20';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$iv 		  				= openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
			$text 		  				= openssl_encrypt($object, $cipher, $keys, $option, $iv);
			$result 	  				= openssl_encrypt($text . $iv, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));

			$cipher 	  				= 'AES-256-CBC';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$iv 		  				= openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
			$text 		  				= openssl_encrypt($result, $cipher, $keys, $option, $iv);
			$result 	  				= openssl_encrypt($text . $iv, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));

			$cipher 	  				= 'AES-256-CBC';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$iv 		  				= openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
			$text 		  				= openssl_encrypt($result, $cipher, $keys, $option, $iv);
			$result 	  				= openssl_encrypt($text . $iv, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));

			$cipher 	  				= 'ChaCha20';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$iv 		  				= openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
			$text 		  				= openssl_encrypt($result, $cipher, $keys, $option, $iv);
			$result 	  				= openssl_encrypt($text . $iv, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));

		} elseif($method == 'decrypto') {

			$cipher 	  				= 'ChaCha20';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$data 		  				= openssl_decrypt($object, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));
			$text 		  				= substr($data, 0, openssl_cipher_iv_length($cipher));
			$iv 		  				= substr($data, 1, openssl_cipher_iv_length($cipher));
			$result 	  				= openssl_decrypt($text, $cipher, $key, $option, $iv);

			$cipher 	  				= 'AES-256-CBC';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$data 		  				= openssl_decrypt($result, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));
			$text 		  				= substr($data, 0, openssl_cipher_iv_length($cipher));
			$iv 		  				= substr($data, 1, openssl_cipher_iv_length($cipher));
			$result 	  				= openssl_decrypt($text, $cipher, $key, $option, $iv);

			$cipher 	  				= 'AES-256-CBC';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$data 		  				= openssl_decrypt($result, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));
			$text 		  				= substr($data, 0, openssl_cipher_iv_length($cipher));
			$iv 		  				= substr($data, 1, openssl_cipher_iv_length($cipher));
			$result 	  				= openssl_decrypt($text, $cipher, $key, $option, $iv);

			$cipher 	  				= 'ChaCha20';
			$keys 		  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$keys 		  				= $this->keysRSRC(strlen($keys)*$bit[''] . $keys . strlen($keys)*$bit['']);
			$option 	  				= 8;
			$data 		  				= openssl_decrypt($result, $cipher, $keys, $option, openssl_cipher_iv_length($cipher));
			$text 		  				= substr($data, 0, openssl_cipher_iv_length($cipher));
			$iv 		  				= substr($data, 1, openssl_cipher_iv_length($cipher));
			$result 	  				= openssl_decrypt($text, $cipher, $key, $option, $iv);

		}

		return $result;

	}

	protected function sessionRSRC() {

		return session_start(['cookie_lifetime'=>false,'cookie_httponly'=>true,'cookie_secure'=>isset($_SERVER['HTTPS']),'use_strict_mode'=>true,'use_only_cookies'=>true]);

	}

}

new securityRSRC();