<?php


class LoginCest
{
    public function loginAdmin(AcceptanceTester $I)
    {
        $I->wantTo('submitted a post by user and publish it as admin');
        $I->amOnPage('/wp-admin');
        $I->fillField('//input[@id=\'user_login\']', 'admin');
        $I->fillField("//input[@id='user_pass']",'admin');
        $I->click("//input[@id='wp-submit']");
    }
}
