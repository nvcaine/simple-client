<?php
abstract class AbstractView implements IView
{
	protected $appFacade;
	protected $sectionInfo;

	public function __construct(AppFacade $appFacade, SectionDTO $section)
	{
		$this->appFacade = $appFacade;
		$this->sectionInfo = $section;
	}

	public function assign($variableName, $value)
	{
		$this->appFacade->assignSmartyVariable($variableName, $value);
	}

	public function setTemplate()
	{
		// figure out how not to hard-code the param
		$this->assign("page", $this->sectionInfo->templateName);
		$this->assign("pageTitle", $this->sectionInfo->title);
	}

	public function checkInput($postParam)
	{
		if(isset($_POST[$postParam]))
			$this->handleInput();
	}

	protected function handleInput()
	{
	}
}
