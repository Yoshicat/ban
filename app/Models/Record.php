<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
	use HasFactory;
	
	public function server()
	{
		return $this->hasOne(Server::class);
	}
	
	public function rule()
	{
		return $this->hasOne(Rule::class);
	}
	
	public function moderator()
	{
		return $this->hasOne(User::class);
	}
	
	public function punishment()
	{
		return $this->hasOne(Punishment::class);
	}
	
}
