<?php
class SettingsManager
{
	protected $settingsFileName = "";
	protected $settings;

	private $sectionsInfo = array();
	private $defaultSection = "";
	private $mainTemplateName = "";
	private $appURL = "";

	public function __construct($settingsFileName)
	{
		$this->settingsFileName = $settingsFileName;
	}

	public function loadSettings()
	{
		$xml = simplexml_load_file($this->settingsFileName);

		$this->parseSettings($xml);
	}

	public function getSections()
	{
		return $this->sectionsInfo;
	}

	public function getSectionByName($sectionName)
	{
		foreach ($this->sectionsInfo as $sectionInfo)
			if ($sectionInfo->name == $sectionName)
				return $sectionInfo;

		return null;
	}

	public function getDefaultSection()
	{
		return $this->defaultSection;
	}

	public function getAppURL()
	{
		return $this->appURL;
	}

	protected function parseSettings($xml)
	{
		$this->parseSections($xml);
		$this->parseGlobalSettings($xml);
	}

	protected function parseSections($xml)
	{
		$this->sectionsInfo[] = new SectionDTO(json_decode("{\"sectionName\":\"unknown\", \"templateName\":\"404\", \"title\":\"Not found\"}"));

		foreach ($xml->sections->section as $section)
			$this->sectionsInfo[] = new SectionDTO($section);
	}

	protected function parseGlobalSettings($xml)
	{
		$this->defaultSection = (string)$xml->defaultSection;

		$this->appURL = (string)$xml->appURL;
	}
}