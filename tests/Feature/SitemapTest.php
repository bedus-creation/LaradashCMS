<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testExample()
    {
        dd(controller_path('app'));
        $this->withOutExceptionHandling();
        $this->get('sitemap.xml')
            ->assertStatus(200);
    }

    public function controller_path($args){
        
    }
}
