<?php

namespace App\GraphQL\Mutation;

use App\Models\Categories;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;

class CategoriesMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CategoriesMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return GraphQL::type('categories_type');
    }

    public function args()
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Nome da Categoria'
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $categories = Categories::create([
            'name' => $args['name'],
        ]);

        return $categories;
    }
}