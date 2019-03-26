<?php
namespace Aammui\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp(){
        parent::setUp();
        $this->withOutExceptionHandling();
    }
    /** @test */
    public function it_gives_200_routes()
    {
        $this->get(config('laradash.base_route') . '/posts/')
            ->assertStatus(200);
    }

    /** @test */
    public function autheticated_users_can_access_to_the_admin_routes(){
        $user = factory(User::class)->create();
        $this->be($user);
        $this->get('admin/categories')->assertStatus(200);
    }
}
 