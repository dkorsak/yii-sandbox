<?php

class LoginController extends Controller
{
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->render('login');
	}
}