<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 * @property int number
 * @property int id
 * @property int user_id
 * @property int company_id
 * @property double cost
 * @property int payment_type_id
 * @property string address
 * @property int confirmed
 * @property int order_receipt_type_id
 */
class Order extends Model
{
    //
}
