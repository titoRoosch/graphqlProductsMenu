<?php

namespace App\GraphQL\Mutation;

use App\Models\Promotions;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;

class PromotionsMutation extends Mutation
{
    protected $attributes = [
        'name' => 'PromotionsMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return Type::listOf(Type::string());
    }

    public function args()
    {
        return [
            'price' => [
                'type' => Type::nonNull(Type::float()),
                'description' => "product price",
            ],
            'productId' => [
                'type' => Type::nonNull(Type::int()),
                'description' => "category id",
            ],
            'startDate' => [
                'type' => Type::nonNull(Type::string()),
                'description' => "promotion start date",
            ],
            'endDate' => [
                'type' => Type::nonNull(Type::string()),
                'description' => "promotion end date",
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $promotion = Promotions::create([
            'price' => $args['price'],
            'productId' => $args['productId'],
            'startDate' => $args['startDate'],
            'endDate' => $args['endDate'],
        ]);

        return [];
    }
}