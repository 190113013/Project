<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpDetails extends Model
{
    use HasFactory;

protected $fillable = ['item_id', 'filename'];
public function item()
{
return $this->belongsTo('App\Item');
}
}
