<?php 

$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that local login system works');
$I->amOnPage('/');
$I->fillField('inputUsernameEmail', 'ashwin');
$I->fillField('inputPassword', '4shw1n');
$I->click('localLoginBtn');
$I->see('dashboard');

