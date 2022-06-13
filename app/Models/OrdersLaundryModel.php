<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class OrdersLaundryModel extends Model
{
    
	public $id;
	public $code_order;
	public $package_id;
	public $total_price;
	public $user_name;
	public $user_phone;
	public $user_address;
	public $date_drop_laundry;
	public $date_take_laundry;
	public $date_finish_laundry;
	public $status;
	public $created_at;
	public $updated_at;

}