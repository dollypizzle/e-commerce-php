<?php

namespace Tests\Setup;

use App\Product;
use App\User;

class ProductFactory
{
    protected $user;

    public function ownedBy($user)
    {
        $this->user = $user;

        return $this;
    }
    public function create()
    {
        $product = factory(Product::class)->create([
            'owner_id' => $this->user ?? factory(User::class)
        ]);

        return $product;
    }
}
