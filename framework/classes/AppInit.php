<?php
class AppInit
{
	private	$ignore = array('.', '..', 'cgi-bin', '.svn', 'templates', 'compile');

	public function __construct($rootPath)
	{
		//$this->loadFromFolder("framework");

		$this->loadFromFolder($rootPath);
	}

	public function loadFromFolder($rootPath)
	{
		$this->parseFolderItems($rootPath, $this->ignore);
	}

	protected function parseFolderItems($rootPath, $ignoredItems)
	{
		$dirHandler = @opendir($rootPath);

		while (false !== ($file = readdir($dirHandler)))
			$this->parseFileItem($file, $rootPath, $ignoredItems);

		closedir($dirHandler);
	}

	private function parseFileItem($file, $rootPath, $ignoredItems)
	{
		if (in_array($file, $ignoredItems))
			return;

		if (is_dir("$rootPath/$file"))
		{
			$this->loadFromFolder("$rootPath/$file");
			return;
		}

		return require_once("$rootPath/$file"); //$this->importClass("$rootPath/$file");
	}
}