<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;

    protected $table                = 'likes';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['content_id', 'user_id', 'category_id', 'created_at'];

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
