<?php
abstract class AbstractSection implements ISection
{
	protected $appFacade;
	protected $view;

	public function __construct(IView $view, AppFacade $facade)
	{
		$this->appFacade = $facade;
		$this->view = $view;
	}

	public function run()
	{
		$this->view->setTemplate();
	}
}