<?php

$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that Hello Codeception works.' );

$I->logOut();

$I->amOnPage( '/' );

$I->see( 'Hello Codeception' );
