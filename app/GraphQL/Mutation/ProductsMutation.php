<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use App\Models\Products;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;

class ProductsMutation extends Mutation
{
    protected $attributes = [
        'name' => 'ProductsMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('products_type');
    }

    public function args()
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => "nome do produto",
            ],
            'basePrice' => [
                'type' => Type::nonNull(Type::float()),
                'description' => "product price",
            ],
            'categoryId' => [
                'type' => Type::nonNull(Type::int()),
                'description' => "category id",
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $products = Products::create([
            'name' => $args['name'],
            'basePrice' => $args['basePrice'],
            'categoryId' => $args['categoryId'],
        ]);

        return $products;
    }
}