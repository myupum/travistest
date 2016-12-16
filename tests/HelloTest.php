<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\HelloController;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    public function setUp(){
 		parent::setUp();
 		$this->hello = new HelloController();
	}

    public function testHello(){
 		 $this->assertEquals($this->xxx->additional(1,2),3);
	}
}
