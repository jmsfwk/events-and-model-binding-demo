<?php

namespace App\Listeners;

use App\Events\SuperFluffyCatCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AnnounceFluffyCat
{
    /**
     * Handle the event.
     *
     * @param  SuperFluffyCatCreated  $event
     * @return void
     */
    public function handle(SuperFluffyCatCreated $event)
    {
        dd('Fluffy!!!!!!!!!!!!!!!!!!!');
    }
}
