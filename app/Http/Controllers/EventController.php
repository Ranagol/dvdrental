<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Events\ButtonClickedEvent;
use Barryvdh\Debugbar\Facades\Debugbar;

class EventController extends Controller
{
    /**
     * Displays the page that can trigger an event.
     *
     * @return View
     */
    public function displayCreateEventPage(): View
    {
        Debugbar::info('displayCreateEventPage() is triggered.');

        return view('create-event');
    }

    /**
     * Will trigger the  ButtonClickedListener.
     *
     * @param Request $request
     * @return void
     */
    public function triggerButtonClickedEvent(Request $request): void
    {
        ButtonClickedEvent::dispatch();
    }
}
