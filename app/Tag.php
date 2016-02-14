<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SoftDeletes;

    protected $table                = 'tags';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['content_id', 'name', 'icon', 'created_at', 'updated_at'];

    /**
     * Relations
     */
    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id');
    }
}
