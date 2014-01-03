<?php
class PostsSection extends AbstractSection
{
	public function run()
	{
		$postData = json_decode(file_get_contents("http://romualdhalasz.com/php/server-demo/posts.json"));

		$this->view->assign("posts", $postData);

		parent::run();
	}
}