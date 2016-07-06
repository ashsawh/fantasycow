<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that application loads without error');
$I->amOnPage('/');
$I->seeInTitle('Fantasy Cow');
