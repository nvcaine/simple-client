<?php
class AppFacade
{
	protected $smarty;
	protected $settingsManager;

	private $_currentPage = "";

	public function __construct(SettingsManager $settingsManager)
	{
		$this->settingsManager = $settingsManager;

		$this->init();
	}

	public function getDefaultSection()
	{
		return $this->settingsManager->getDefaultSection();
	}

	public function getCurrentPage()
	{
		return $this->_currentPage;
	}

	public function getAppURL()
	{
		return $this->settingsManager->getAppURL();
	}

	public function assignSmartyVariable($variableName, $value)
	{
		$this->smarty->assign($variableName, $value);
	}

	public function displayTemplate($templateName)
	{
		$this->smarty->display($templateName . ".tpl");
	}

	public function handleSectionRequest($section)
	{
		$section = $this->settingsManager->getSectionByName($section);

		if($section == null)
		{
			header("HTTP/1.0 404 Not Found");

			$this->runSectionController($this->settingsManager->getSectionByName("unknown"));
			$this->displayTemplate("index");

			exit();
		}

		$this->runSectionController($section);
	}

	public function getCurrentSection($sectionParamName)
	{
		if (isset($_GET[$sectionParamName]))
			return strtolower($_GET[$sectionParamName]);

		return $this->getDefaultSection();
	}

	protected function runSectionController(SectionDTO $sectionInfo)
	{
		$controllerClassName = ucfirst($sectionInfo->name) . "Section";
		$viewClassName = ucfirst($sectionInfo->name) . "View";

		$view = new $viewClassName($this, $sectionInfo);

		$section = new $controllerClassName($view, $this);
		$section->run();
	}

	protected function init()
	{
		$this->smarty = new Smarty();
		$this->setSmartyFolders($this->smarty);

		$this->settingsManager->loadSettings();
		$this->assignSmartyVariable("appURL", $this->getAppURL());
	}

	protected function setSmartyFolders(Smarty $smarty)
	{
		$this->smarty->template_dir = "app/view/templates";
		$this->smarty->compile_dir = "app/view/compile";
		$this->smarty->cache_dir = "libs/smarty/cache";
		$this->smarty->config_dir = "libs/smarty/configs";
	}
}