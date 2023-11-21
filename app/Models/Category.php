<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements Auditable
{
    use AuditableTrait;
    use HasFactory;
    use SoftDeletes;
    public $guarded = [];

        /**
     * posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    /**
     * posts
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    /**
     * image
     *
     * @return Attribute
     */
 
}
