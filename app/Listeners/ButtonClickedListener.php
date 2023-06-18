<?php

namespace App\Listeners;

use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Events\ButtonClickedEvent;
use Illuminate\Http\RedirectResponse;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\EventController;
use Illuminate\Contracts\Queue\ShouldQueue;

class ButtonClickedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ButtonClickedEvent  $event
     * @return void
     */
    public function handle(ButtonClickedEvent $event)
    {
        $t = 8;
        Debugbar::info('The ButtonClickedListener was successfully triggered');
        // dd('The ButtonClickedListener was successfully triggered');
    }
}
