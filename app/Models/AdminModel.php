<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class AdminModel extends Model
{
    
	public $id;
	public $name;
	public $image;
	public $email;
	public $password;
	public $created_at;
	public $updated_at;

}