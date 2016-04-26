<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

use Auth;

class Content extends Model
{
    use SoftDeletes;

    protected $table                = 'contents';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['category_id', 'user_id', 'image', 'video_url', 'name', 'short_desc', 'content', 'types', 'status', 'created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('content', function(Builder $builder) {
            $builder->where('types', 'content');
        });

        Content::creating(function ($content) {
            $content->image = uploadFile($content->image, 'content', 'images');

            if(Auth::user()) $content->user_id = Auth::user()->id;
            $content->types = 'content';
        });

        Content::updating(function ($content) {
            $content->image = uploadFile($content->image, 'content', 'images');

            if(Auth::user()) $content->user_id = Auth::user()->id;
            $content->types = 'content';
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
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'content_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'content_id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'content_id');
    }
}
