<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Topic extends Model
{
    use SoftDeletes;

    protected $table                = 'contents';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['category_id', 'user_id', 'image', 'video_url', 'name', 'content', 'types', 'status', 'created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('content', function(Builder $builder) {
          $builder->where('types', 'topic');
        });

        Topic::creating(function ($topic) {
            $topic->user_id = Auth::user()->id;
            $topic->types = 'topic';
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

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'category_id');
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
