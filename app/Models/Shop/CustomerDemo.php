<?php

namespace App\Models\Shop;

use App\Models\Address;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerDemo extends Customer
{
    public function getMorphClass()
    {
        return Customer::class;
    }
    public function scan()
    {
        dump($this);
    }
}
