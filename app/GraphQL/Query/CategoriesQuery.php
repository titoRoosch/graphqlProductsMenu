<?php

namespace App\GraphQL\Query;

use App\Models\Categories;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;

class CategoriesQuery extends Query
{
    protected $attributes = [
        'id' => 'CategoriesQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('categories_type'));
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
            return Categories::where('id', $args['id'])->get();
        }       
        return Categories::all();
    }
}