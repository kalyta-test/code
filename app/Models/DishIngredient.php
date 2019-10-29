<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class DishIngredient
 * @package App\Models
 * @property int id
 * @property int dish_id
 * @property int ingredient_id
 */
class DishIngredient extends Pivot
{
    //
}
