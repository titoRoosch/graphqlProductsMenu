<?php

namespace App\GraphQL\Type;

use App\Models\Products;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class ProductsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ProductsType',
        'description' => 'A type',
        'model' => Products::class
    ];

    public function fields()
    {
        return [
            'id' => [ 
                'type' => Type::nonNull(Type::ID()),
                'description' => 'o id do produto no banco de dados'
            ],
            'name' => [ 
                'type' => Type::string(),
                'description' => 'o nome do produto no banco de dados'
            ],  
            'basePrice' => [
                'type' => Type::float(),
                'description' => 'o preco do produto no banco de dados'
            ],
            'category' => [
                'type' => Type::listOf(GraphQL::type('categories_type')),
                'description'=> 'categoria do produto'
            ],
            'promotions' => [
                'type' => Type::listOf(GraphQL::type('promotions_type')),
                'description'=> 'promoções do produto'
            ]
        ];
    }
}