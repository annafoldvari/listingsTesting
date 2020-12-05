<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    function exceptionThrownWithEmptyData() 
    {
      $this->expectExceptionMessage('Unable to create a listing, data unavailable');

      $basicListing = new ListingBasic([]);

    }

    /** @test */
    function exceptionThrownWithEmptyId() 
    {
      $data = array('id' => null, 'title' => 'Test case');

      $this->expectExceptionMessage('Unable to create a listing, invalid id');

      $basicListing = new ListingBasic($data);

    }

    /** @test */
    function exceptionThrownWithEmptyTitle() 
    {
      $data = array('id' => 1, 'title' => null);

      $this->expectExceptionMessage('Unable to create a listing, invalid title');

      $basicListing = new ListingBasic($data);

    }

     /** @test */
    function newObjectIsCreated() 
    {
      $data = array('id' => 10, 'title' => 'Test Case');

      $basicListing = new ListingBasic($data);

      $this->assertIsObject($basicListing);

    }

     /** @test */
     function getStatusReturnsBasic() 
     {
       $data = array('id' => 10, 'title' => 'Test Case');
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('basic', $basicListing->getStatus());
 
     }

     /** @test */
     function getIdReturnsRightData() 
     {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => '@testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('10', $basicListing->getId());
 
     }

     /** @test */
     function getTitleReturnsRightData() 
     {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => '@testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('Test Case', $basicListing->getTitle());
 
     }

     /** @test */
     function getWebsiteReturnsRightData() 
     {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'http://www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => '@testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('http://www.test.com', $basicListing->getWebsite());
 
     }

     /** @test */
     function getEmailReturnsRightData() 
     {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => '@testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('email@test.com', $basicListing->getEmail());
 
     }

     /** @test */
     function getTwitterReturnsRightData() 
     {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('testcase', $basicListing->getTwitter());
 
     }

     /** @test */
     function toArrayCreatesArrayWithKeyId() 
     {
      $data = array(
        'id' => 10, 
        'title' => 'Test Case', 
        'website' => 'www.test.com', 
        'email' => 'email@test.com', 
        'twitter' => 'testcase'
       );

      $basicListing = new ListingBasic($data);

      $created_array = $basicListing->toArray();

      $this->assertArrayHasKey('id', $created_array);
     }

      /** @test */
      function toArrayCreatesArrayWithKeyTitle() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $created_array = $basicListing->toArray();
 
       $this->assertArrayHasKey('title', $created_array);
      }

       /** @test */
     function toArrayCreatesArrayWithKeyWebsite() 
     {
      $data = array(
        'id' => 10, 
        'title' => 'Test Case', 
        'website' => 'www.test.com', 
        'email' => 'email@test.com', 
        'twitter' => 'testcase'
       );

      $basicListing = new ListingBasic($data);

      $created_array = $basicListing->toArray();

      $this->assertArrayHasKey('website', $created_array);
     }

      /** @test */
      function toArrayCreatesArrayWithKeyEmail() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $created_array = $basicListing->toArray();
 
       $this->assertArrayHasKey('email', $created_array);
      }

       /** @test */
     function toArrayCreatesArrayWithKeyTwitter() 
     {
      $data = array(
        'id' => 10, 
        'title' => 'Test Case', 
        'website' => 'www.test.com', 
        'email' => 'email@test.com', 
        'twitter' => 'testcase'
       );

      $basicListing = new ListingBasic($data);

      $created_array = $basicListing->toArray();

      $this->assertArrayHasKey('twitter', $created_array);
     }

      /** @test */
      function toArrayCreatesArrayWithRightId() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $created_array = $basicListing->toArray();
 
       $this->assertEquals(10, $created_array['id']);
      }

       /** @test */
       function toArrayCreatesArrayWithRightTitle() 
       {
        $data = array(
          'id' => 10, 
          'title' => 'Test Case', 
          'website' => 'www.test.com', 
          'email' => 'email@test.com', 
          'twitter' => 'testcase'
         );
  
        $basicListing = new ListingBasic($data);
  
        $created_array = $basicListing->toArray();
  
        $this->assertEquals('Test Case', $created_array['title']);
       }

        /** @test */
      function toArrayCreatesArrayWithRightWebsite() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $created_array = $basicListing->toArray();
 
       $this->assertEquals('http://www.test.com', $created_array['website']);
      }

       /** @test */
       function toArrayCreatesArrayWithRightEmail() 
       {
        $data = array(
          'id' => 10, 
          'title' => 'Test Case', 
          'website' => 'www.test.com', 
          'email' => 'email@test.com', 
          'twitter' => 'testcase'
         );
  
        $basicListing = new ListingBasic($data);
  
        $created_array = $basicListing->toArray();
  
        $this->assertEquals('email@test.com', $created_array['email']);
       }

        /** @test */
      function toArrayCreatesArrayWithRightTwitter() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $created_array = $basicListing->toArray();
 
       $this->assertEquals('testcase', $created_array['twitter']);
      }

        /** @test */
      function EmptyWebsiteHasNullValue() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => '', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals(null, $basicListing->getWebsite());
      }

      /** @test */
      function httpGetsAddedToWebsiteRightValue() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);
 
       $this->assertEquals('http://' . $data['website'], $basicListing->getWebsite());
      }

      /** @test */
      function checkSetWebsiteDirectly() 
      {
       $data = array(
         'id' => 10, 
         'title' => 'Test Case', 
         'website' => 'www.test.com', 
         'email' => 'email@test.com', 
         'twitter' => 'testcase'
        );
 
       $basicListing = new ListingBasic($data);

       $basicListing->setWebsite('www.test2.com');
 
       $this->assertEquals('http://www.test2.com', $basicListing->getWebsite());
      }

        /** @test */
        function StatusGetSetTheRightValue() 
        {
         $data = array(
           'id' => 10, 
           'title' => 'Test Case', 
           'website' => 'www.test.com', 
           'email' => 'email@test.com', 
           'twitter' => 'testcase',
           'status' => ''
          );
   
         $basicListing = new ListingBasic($data);
   
         $this->assertEquals('basic', $basicListing->getStatus());
        }

        /** @test */
        function StatusGetSetTheRightValue2() 
        {
         $data = array(
           'id' => 10, 
           'title' => 'Test Case', 
           'website' => 'www.test.com', 
           'email' => 'email@test.com', 
           'twitter' => 'testcase'
          );
   
         $basicListing = new ListingBasic($data);

         $basicListing->setStatus(' basic  ');
   
         $this->assertEquals('basic', $basicListing->getStatus());
        }

}    