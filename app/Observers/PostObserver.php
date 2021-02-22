<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Application as ConsoleApplication;

class PostObserver
{

    public function creating(Post $post)
    {
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    public function deleting(Post $post)
    {
        if ($post->image){
            Storage::delete($post->image->url);
        }
    }

}
