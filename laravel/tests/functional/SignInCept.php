<?php
$I = new FunctionalTester($scenario);
$I->amOnPage('/');
$I->click('#mediaLogin');
$I->see('Welcome');
