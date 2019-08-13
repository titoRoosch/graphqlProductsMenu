<?php

namespace App\GraphQL\Type;

use App\Models\Promotions;
use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PromotionsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'PromotionsType',
        'description' => 'A type',
        'model' => Promotions::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::ID()),
                'description' => 'o id da promoção'
            ],
            'price' => [
                'type' => Type::float(),
                'description' => 'preço do produto na promoção'
            ],
            'startDate' => [
                'type' => Type::String(),
                'description' => 'data inicial da promoção'
            ],
            'endDate' => [
                'type' => Type::String(),
                'description' => 'data final da promoção'
            ],
        ];
    }
}