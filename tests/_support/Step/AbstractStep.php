<?php

namespace Step;
use page\AbstractPage;

/**
 * Class AbstractStep
 * @package Step
 */
class AbstractStep extends \AcceptanceTester
{
	/**
	 * @param $userName
	 * @param $passWord
	 * @throws \Exception
	 */
	public function loginAdmin($userName, $passWord)
	{
		$I = $this;
		$I->amOnPage(AbstractPage::$url);
		$I->waitForElementVisible(AbstractPage::$userLoginInput, 30);
		$I->fillField(AbstractPage::$userLoginInput, $userName);
		$I->waitForElementVisible(AbstractPage::$passPassInput, 30);
		$I->fillField(AbstractPage::$passPassInput,$passWord);
		$I->waitForElementVisible(AbstractPage::$loginButton, 30);
		$I->click(AbstractPage::$loginButton);
		$I->waitForText(AbstractPage::$dashboardTitle, 30);
	}
}
