<?php

namespace App\Services;

use Illuminate\Contracts\Mail\Mailer;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Log;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{

	/** @var UserRepositoryInterface */
	protected $user;

	/** @var Mailer */
	protected $mailer;

	/**
	 * @param UserRepositoryInterface $user
	 * @param Mailer $mailer
	 */
	public function __contruct(UserRepositoryInterface $user, Mailer $mailer)
	{
		$this->user = $user;
		$this->mailer = $mailer;
	}

	/**
	 * @param array $params
	 * @return \App\DataAccess\Eloquent\User
	 */
	public function registerUser(array $params)
	{
		
		$user = $this->user->save($params);
		/*
		$this->mailer->send([
			'emails.register',
			['user' => $user],
			function ($m) use ($user) {
      	$m->sender('circlecle4586@gmail.com', 'lara_mail test')
          ->to($user->email, $user->name)
          ->subject('user regist end!!!');
      }
		]);
		*/

		return $user;
	}


}