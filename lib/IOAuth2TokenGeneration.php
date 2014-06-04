<?php

/**
 *
 * @author reuben
 */
interface IOAuth2TokenGeneration {

	public function getAuthCode();

	public function getToken($client_id, $user_id, $scope = NULL);

	public function getRefreshToken($client_id, $user_id);
}
