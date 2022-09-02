<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingJob extends Model
{
    use HasFactory;
    protected $table = 'listing_jobs';
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description',
    'tags','logo','user_id','vacancy','jobNature','salary'];

    public function scopeFilter($query, array $filters) {
        // if this not false
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

     // Relationship To User
     public function user() {
     return $this->belongsTo(User::class, 'user_id');
     }

}