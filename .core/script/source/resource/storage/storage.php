<?php

class storageRSRC {

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
			$keys 		 				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
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

	protected function addRSRC($method, $load, $id, $object, $objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);

		if($method == 'a') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 						= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file, true);
			$data [$id]['num']			= $sdata['num'] + 1;
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
								  		  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn), $file);

			$file 						= file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 						= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file, true);
			$data [$id][$sdata['num']]  = $object;
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn), $file);

		} elseif($method == 'b') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 					 	= array('id'=>$data->id,'add'=>$data->add,'discard'=>$data->discard,'total'=>$data->total);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file, true);
			$data 						= array('id'=>$sdata['id'] + 1,'add'=>$sdata['add'] + 1,'discard'=>$sdata['discard'] + 0,'total'=>$sdata['total'] + 1);
			$data 					 	= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn), $file);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 					 	= array('id'=>$data->id,'add'=>$data->add,'discard'=>$data->discard,'total'=>$data->total);

			$media_fn 	 				= hash_hmac('Sha512', $sdata['id'] . $sdata['add'] . $sdata['discard'] . $sdata['total'], $objectkeys_fn);
										  move_uploaded_file($object, '.base/storage/b/' . $media_fn);
										  return $media_fn;

		}

	}

	protected function readRSRC($method, $load, $id, $num, $object, $objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);

		if($method == 'a:select') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data  						= json_decode($file);
			$data 						= $data->$id->$num->$object;
										  return $data;

		} elseif($method == 'a:ascending') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 					 	= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  for($x = 1; $x <= $sdata['num']; $x++) {

										  	$data = $data->$id->$x->$object;

										  }
										  return $data;

		} elseif($method == 'a:descending') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 					 	= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  for($x = 1; $x >= $sdata['num']; $x++) {

										  	$data = $data->$id->$x->$object;

										  }
										  return $data;

		} elseif($method == 'a=num:ascending') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 						= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  for($x = 1; $x <= $sdata['num']; $x++) {

										  	$data = $x;

										  }
										  return $data;

		} elseif($method == 'a=num:descending') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 						= array('num'=>$data->$id->num);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  for($x = 1; $x >= $sdata['num']; $x++) {

										  	$data = $x;

										  }
										  return $data;

		} elseif($method == 'b') {

			$file 						= '.base/storage/b/' . $load;
										  return $file;

		}

	}

	protected function changeRSRC($method, $load, $id, $num, $object, $reobject, $objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);

		if($method == 'a') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$data->$id->$num->$object 	= $reobject;
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn), $file);

		}

	}

	protected function discardRSRC($method, $load, $id, $num, $objectkeys) {

		$bit 			  				= array('a'=>2,'b'=>4,'c'=>8,'d'=>16,'e'=>32,'f'=>64,'g'=>128,'h'=>256);

		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys)*$bit[''] . $objectkeys . strlen($objectkeys)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);
		$objectkeys_fn 	  				= $this->keysRSRC(strlen($objectkeys_fn)*$bit[''] . $objectkeys_fn . strlen($objectkeys_fn)*$bit['']);

		if($method == 'a=id') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  unset($data->$id);
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn), $file);

		} elseif($method == 'a=num') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
										  unset($data->$id->$num);
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', $load, $objectkeys_fn), $file);

		} elseif($method == 'b') {

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$sdata 						= array('id'=>$data->id,'add'=>$data->add,'discard'=>$data->discard,'total'=>$data->total);

			$file 						= file_get_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn));
			$file 						= $this->cryptoRSRC('decrypto', $file, $objectkeys);
			$data 						= json_decode($file);
			$data 						= array('id'=>$sdata['id'] + 1,'add'=>$sdata['add'] + 0,'discard'=>$sdata['discard'] + 1,'total'=>$sdata['total'] - 1);
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
			$file 						= $this->cryptoRSRC('encrypto', $data, $objectkeys);
										  file_put_contents('.base/storage/a/' . hash_hmac('Sha512', '-b-count-', $objectkeys_fn), $file);

										  shell_exec('rm .base/storage/b/' . $load);

		}

	}

}

new storageRSRC();