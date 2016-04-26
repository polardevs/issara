<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
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
                                        'is_topic',
                                        'order',
                                        'created_at',
                                        'updated_at'
                                      ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('channel', function(Builder $builder) {
          $builder->where('is_topic', 1)
                  ->where('is_ads', 0);
        });

        Channel::creating(function ($channel) {
            $channel->is_topic = 1;
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
    public function topics()
    {
        return $this->hasMany(Topic::class, 'category_id');
    }

    public function sub_channels()
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
