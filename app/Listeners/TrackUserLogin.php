<?php

namespace App\Listeners;

use App\Models\UserLoginLog;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class TrackUserLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
        public readonly Request|null $request
    )
    {}

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        UserLoginLog::create([
            'user_id' => $event->user->getAuthIdentifier(),
            'remote_addr' => $this->getIpAddress(),
            'guard' => $event->guard,
            'remember_checked' => $event->remember,
            'user_agent' => $this->getUserAgent(),
        ]);
    }

    private function getIpAddress(): string|null
    {
        return optional($this->request)->ip();
    }

    private function getUserAgent(): string|null
    {
        return optional($this->request)->header('User-Agent');
    }
}
