<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdsCatg extends Model
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
                                        'is_ads',
                                        'order',
                                        'created_at',
                                        'updated_at'
                                      ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('channel', function(Builder $builder) {
          $builder->where('is_ads', 1);
        });

        Channel::creating(function ($channel) {
            $channel->is_ads = 1;
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
    public function adsList()
    {
        return $this->hasMany(Advertise::class, 'category_id');
    }

    public function sub_ads()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
