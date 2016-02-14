<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Content extends Model
{
    use SoftDeletes;

    protected $table                = 'contents';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['category_id', 'user_id', 'image', 'video_url', 'name', 'content', 'types', 'status', 'created_at', 'updated_at'];

    // getter
    public function getCreateTimeAttribute()
    {
        return $this->created_at->format('d F, Y');
        // $carbon = Carbon::createFromFormat('Y-m-d H', $this->created_at);
        // dd($carbon);
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
