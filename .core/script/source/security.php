<?php

require('resource/security/security.php');

class security extends securityRSRC {

	public function crypto($method, $object, $objectkeys) {

		return $this->cryptoRSRC($method, $object, $objectkeys);

	}

	public function session() {

		return $this->sessionRSRC();

	}

}

$security = new security();