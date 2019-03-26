<?php
namespace Aammui\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp(){
        parent::setUp();
        $this->withOutExceptionHandling();
    }
    /** @test */
    public function it_gives_200_routes()
    {
        $this->get(config('laradash.base_route') . '/categories/')
            ->assertStatus(200);
    }
}
 