<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
        $product = factory('App\Product')->create();

        $this->assertEquals('/products/' . $product->id, $product->path());
    }

    /** @test */
    public function it_belongs_to_an_owner()
    {
        $product = factory('App\Product')->create();

        $this->assertInstanceOf('App\User', $product->owner);
    }
}
