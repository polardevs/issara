<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;
use Auth;

class Banner extends Model
{
    use SoftDeletes;

    protected $table                = 'contents';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['category_id', 'user_id', 'image', 'types', 'content', 'order', 'created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('content', function(Builder $builder) {
          $builder->where('types', 'banner');
        });

        Banner::creating(function ($banner) {
            $banner->image = uploadFile($banner->image, 'banner', 'images');

            if(Auth::user()) $banner->user_id = Auth::user()->id;
            $banner->category_id = 14;
            $banner->types = 'banner';
            $banner->order = Banner::count() + 1;
        });

        Banner::updating(function ($banner) {
            $banner->image = uploadFile($banner->image, 'banner', 'images');

            if(Auth::user()) $banner->user_id = Auth::user()->id;
            $banner->category_id = 14;
            $banner->types = 'banner';
        });
    }

    // getter
    public function getCreateTimeAttribute()
    {
        return $this->created_at->format('d F, Y');
    }

    public function getLinkAttribute()
    {
        $link = str_replace(' ', '-', $this->name);
        $link .= '-' . $this->id;
        return $link;
    }

    /**
     * Scope
     */
    public function scopeLastest($query)
    {
        return $query->orderBy('created_at', 'desc')->first();
    }

    /**
     * Relations
     */

    public function adsCatg()
    {
        return $this->belongsTo(AdsCatg::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
