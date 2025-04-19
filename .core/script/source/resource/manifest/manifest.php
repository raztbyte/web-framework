<?php

class manifestRSRC {

	protected function addRSRC($method, $load, $id, $object) {

		if($method == 'a') {

			$file 						= file_get_contents('.base/manifest/a/' . $load);
			$data 						= json_decode($file, true);
			$data [$id] 				= array('object'=>$object);
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
										  file_put_contetns('.base/manifest/a/' . $load, $data);

		} elseif($method == 'b') {

			$media_fn 					= $load;
										  move_uploaded_file($object, '.base/manifest/b/' . $media_fn);
										  return $media_fn;

		}

	}

	protected function readRSRC($method, $load, $id) {

		if($method == 'a') {

			$file 						= file_get_contents('.base/manifest/a/' . $load);
			$data 						= json_decode($file);
			$data 						= $data->$id->object;
										  return $data;

		} elseif($method == 'b') {

			$file 						= '.base/manifest/b/' . $load;
										  return $file;

		}

	}

	protected function changeRSRC($method, $load, $id, $reobject) {

		if($method == 'a') {

			$file 						= file_get_contents('.base/manifest/a/' . $load);
			$data 						= json_decode($file);
			$data->$id->object 			= $reobject;
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
										  file_put_contents('.base/manifest/a/' . $load, $data);

		}

	}

	protected function discardRSRC($method, $load, $id) {

		if($method == 'a') {

			$file 						= file_get_contents('.base/manifest/a/' . $load);
			$data 						= json_decode($file);
										  unset($data->$id);
			$data 						= json_encode($data, JSON_PRETTY_PRINT);
										  file_put_contents('.base/manifest/a/' . $load, $data);

		} elseif($method == 'b') {

										  shell_exec('rm .base/manifest/b/' . $load);

		}

	}

}

new manifestRSRC();