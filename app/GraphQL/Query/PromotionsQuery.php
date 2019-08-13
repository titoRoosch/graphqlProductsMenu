<?php

namespace App\GraphQL\Query;

use App\Models\Promotions;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;

class PromotionsQuery extends Query
{
    protected $attributes = [
        'name' => 'PromotionsQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('promotions_type'));
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
            return Promotions::where('id', $args['id'])->get();
        }       
        return Promotions::all();
    }
}