<?php

/** @var \Codeception\Scenario $scenario */
$I = new AcceptanceTester( $scenario );

$I->wantTo( 'Test that Hello Codeception works.' );

$I->logOut();

$I->amOnPage( '/' );

$I->see( 'Hello Codeception' );

$I->click( 'Hello Codeception' );

$I->see( 'Welcome' );
$I->click( 'Leave a comment' );
$I->fillField( 'Comment', 'Great post!' );
$I->fillField( 'Name', 'Great post!' );
$I->fillField( 'Email', 'test@test.com' );
//$I->pause();
$I->click( 'Post Comment' );


// Check the comment is in moderation.
$I->loginAsAdmin();
$I->click( 'Comments' );
$I->see( 'Great post!' );

// Or use WordPress functions.
$post_id = url_to_postid( 'http://wordpress/hello' );
$comments_count = wp_count_comments( $post_id );
$I->assertEquals( 1, $comments_count->moderated );
