<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id'  => $user ? $user->id : current_user()
        ],
            [
                'liked' => $liked
        ]);

    }

    public function dislike($user =  null)
    {
        $this->like($user, false);

    }

    public function islikedBy(User $user)
    {
        return $this->likes()->where('user_id' , $user)->exists();

    }
    public function likes()
    {
        return $this->hasMany(Like::class);

    }
}
