<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
	
	/**
	 * @param array $param
	 * @return mixed
	 */
	public function save(array $params);

}