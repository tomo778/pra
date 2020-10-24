<?php

namespace App\Models;

//use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog';

    public $timestamps = true;

    protected $fillable = [
        'status',
        'title',
        'text',
        'price',
    ];

    /** JSONに含めるアクセサ */
    // protected $appends = [
    //     'createdAtJa'
    // ];

    // public function category_rel(): \Illuminate\Database\Eloquent\Relations\hasMany
    // {
    //     return $this->hasMany(ProductCategory::class);
    // }

    // public function add_category(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    // {
    //     return $this->belongsToMany(
    //         Category::class,
    //         'product_category'
    //     );
    // }

    // public function getCreatedAtJaAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])->format('Y年m月d日H:i');//'Y年m月d日(D)H:i'
    // }

    public function scopeStatusCheck(Object $query): \Illuminate\Database\Eloquent\Builder
    {
        return $query->where('blog.status', config('const.STATUS_ON'));
    }
}
