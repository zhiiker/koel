<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class MultipleSongsLiked extends Event
{
    use SerializesModels;

    public function __construct(public Collection $songs, public User $user)
    {
    }
}
