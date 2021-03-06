<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table                = 'categories';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = [
                                        'name',
                                        'parent_id',
                                        'all_parent_id',
                                        'flag_tail',
                                        'order',
                                        'created_at',
                                        'updated_at'
                                        ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('category', function(Builder $builder) {
          $builder->where('is_topic', 0)
                  ->where('is_banner', 0)
                  ->where('is_ads', 0);
        });

        Category::creating(function ($category) {
            if(!$category->order)
                $category->order = Category::count() + 1;
        });
    }

    // getter
    public function getLinkAttribute()
    {
        $link = str_replace(' ', '-', $this->name);
        $link .= '-' . $this->id;
        return $link;
    }

    /**
     * Relations
     */
    public function contents()
    {
        return $this->hasMany(Content::class, 'category_id');
    }

    public function sub_categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'category_id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'category_id');
    }
}
