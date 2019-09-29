<?php

/** @var \Codeception\Scenario $scenario */
$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that Hello Codeception works.' );

$I->amOnPage( '/' );

$I->see( 'Hello Codeception' );



