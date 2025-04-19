<?php

require('resource/res/res.php');

class res extends resRSRC {

	public function add($method, $load, $id, $object) {

		return $this->addRSRC($method, $load, $id, $object);

	}

	public function read($method, $load, $id) {

		return $this->readRSRC($method, $load, $id);

	}

	public function change($method, $load, $id, $reobject) {

		return $this->changeRSRC($method, $load, $id, $reobject);

	}

	public function discard($method, $load, $id) {

		return $this->discardRSRC($method, $load, $id);

	}

}

$res = new res();