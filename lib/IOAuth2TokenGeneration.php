<?php

/**
 *
 * @author reuben
 */
interface IOAuth2TokenGeneration {

	public function getAuthCode();

	public function getKey();

	public function getRefreshToken();
}
