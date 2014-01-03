<?php
class HomeSection extends AbstractSection
{
	public function run()
	{
		$this->view->assign("data", "some fucking data");

		parent::run();
	}
}