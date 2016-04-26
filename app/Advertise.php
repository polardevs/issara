<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Advertise extends Model
{
    use SoftDeletes;

    protected $table                = 'contents';
    protected $softDelete           = true;
    protected $dates                = ['deleted_at'];
    protected $fillable             = ['category_id', 'user_id', 'image', 'name', 'link_url', 'types', 'status', 'created_at', 'updated_at'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('content', function(Builder $builder) {
          $builder->where('types', 'advertise');
        });

        Advertise::creating(function ($advertise) {
            $advertise->image = uploadFile($advertise->image, 'advertise', 'images');

            if(Auth::user()) $advertise->user_id = Auth::user()->id;
            $advertise->types = 'advertise';
        });

        Advertise::updating(function ($advertise) {
            $advertise->image = uploadFile($advertise->image, 'advertise', 'images');

            if(Auth::user()) $advertise->user_id = Auth::user()->id;
            $advertise->types = 'advertise';
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
