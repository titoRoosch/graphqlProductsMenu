<?php

namespace App\GraphQL\Type;

use App\Models\Categories;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class CategoriesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'CategoriesType',
        'description' => 'A type',
        'model' => Categories::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::ID()),
                'description' => 'o id da categoria no banco de dados'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'o id da categoria no banco de dados'
            ],  
            'products' => [
                'type' => Type::listOf(GraphQL::type('products_type')),
                'description'=> 'produtos por categorias'
            ]
        ];
    }
}