<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table                = 'comments';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['content_id', 'user_id', 'category_id', 'detail', 'created_at', 'updated_at', 'deleted_at'];

    // getter
    public function getCreateTimeAttribute()
    {
        return $this->created_at->format('d F, Y');
    }

    /**
     * Relations
     */
    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
