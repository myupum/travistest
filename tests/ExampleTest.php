<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
                ->click('Article')
                ->seePageIs('/article')
                ->dontsee('Error')
                ->dontsee('Fatal')
                ->dontsee('Warning');
    }
}
