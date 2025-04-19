<?php

require('resource/storage/storage.php');

class storage extends storageRSRC {

	public function add($method, $load, $id, $object, $objectkeys) {

		return $this->addRSRC($method, $load, $id, $object, $objectkeys);

	}

	public function read($method, $load, $id, $num, $object, $objectkeys) {

		return $this->readRSRC($method, $load, $id, $num, $object, $objectkeys);

	}

	public function change($method, $load, $id, $num, $object, $reobject, $objectkeys) {

		return $this->changeRSRC($method, $load, $id, $num, $object, $reobject, $objectkeys);

	}

	public function discard($method, $load, $id, $num, $objectkeys) {

		return $this->discardRSRC($method, $load, $id, $num, $objectkeys);

	}

}

$storage = new storage();