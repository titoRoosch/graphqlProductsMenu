<?php

namespace App\GraphQL\Query;

use App\Models\Products;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;

class ProductsQuery extends Query
{
    protected $attributes = [
        'name' => 'ProductsQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('products_type'));
    }

    public function args()
    {
        return [
            'id' =>[
                'type' => Type::int(),
                'description' => 'Id int'
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        if(isset($args['id'])){
            return Products::where('id', $args['id'])->get();
        }       
        return Products::all();
    }
}