<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function getStatusReturnsFeatured() 
    {
      $data = array('id' => 10, 'title' => 'Test Case');

      $featuredListing = new ListingFeatured($data);

      $this->assertEquals('featured', $featuredListing->getStatus());

    }

    /** @test */
    function getCocReturnsExpected() 
    {
      $data = array(
        'id' => 10, 
        'title' => 'Test Case', 
        'coc' => 'This is a test Code of Conduct'
      );

      $featuredListing = new ListingFeatured($data);

      $this->assertEquals('This is a test Code of Conduct', $featuredListing->getCoc());
    }
  }  