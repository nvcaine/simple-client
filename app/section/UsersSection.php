<?php
class UsersSection extends AbstractSection
{
	public function run()
	{
		$userData = json_decode(file_get_contents("http://romualdhalasz.com/php/server-demo/users.json"));

		$this->view->assign("users", $userData);

		parent::run();
	}
}