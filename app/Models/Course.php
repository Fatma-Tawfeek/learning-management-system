<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'description',
        'video',
        'price',
        'label',
        'duration',
        'label',
        'resources',
        'certificate',
        'selling_price',
        'discount_price',
        'prerequisites',
        'bestseller',
        'featured',
        'highestrated',
        'status',
        'category_id',
        'subcategory_id',
        'instructor_id'
    ];

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class);
    }

    public function goals()
    {
        return $this->hasMany(CourseGoal::class);
    }
}
