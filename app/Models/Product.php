<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model implements Auditable
{
     use AuditableTrait;
    use HasFactory;
    use SoftDeletes;
    public $guarded = [];

      public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function color()
    {
        return $this->hasMany(ImageColorProduct::class, 'product_id');
    }
}
