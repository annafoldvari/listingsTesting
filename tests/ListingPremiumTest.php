<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    function getStatusReturnsPremium() 
    {
      $data = array('id' => 10, 'title' => 'Test Case');

      $premiumListing = new ListingPremium($data);

      $this->assertEquals('premium', $premiumListing->getStatus());

    }

    /** @test */
    function getDescriptionReturnsExpected() 
    {
      $data = array(
        'id' => 10, 
        'title' => 'Test Case', 
        'description' => 'This is a test conference'
      );

      $premiumListing = new ListingPremium($data);

      $this->assertEquals('This is a test conference', $premiumListing->getDescription());
    }

    /** @test */
    function displayAllowedTagsReturnsExpected() 
    {
      $tags = htmlspecialchars('<p><br><b><strong><em><u><ol><ul><li>');
      $this->assertEquals($tags, ListingPremium::displayAllowedTags());
    }
  }    