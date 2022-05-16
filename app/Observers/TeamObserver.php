<?php

namespace App\Observers;

use App\Mail\TeamLeadMail;
use App\Models\Team;
use Illuminate\Support\Facades\Mail;

class TeamObserver
{
    /**
     * Handle the Team "created" event.
     *
     * @param  \App\Models\Team  $team
     * @return void
     */
    public function created(Team $team)
    {
        //
    }

    /**
     * Handle the Team "updated" event.
     *
     * @param  \App\Models\Team  $team
     * @return void
     */
    public function updated(Team $team)
    {
        $mail = new TeamLeadMail($team);

// TODO : Add Date to emails 

        Mail::to($team->team_lead_email)->send($mail);
    }

    /**
     * Handle the Team "deleted" event.
     *
     * @param  \App\Models\Team  $team
     * @return void
     */
    public function deleted(Team $team)
    {
        //
    }

    /**
     * Handle the Team "restored" event.
     *
     * @param  \App\Models\Team  $team
     * @return void
     */
    public function restored(Team $team)
    {
        //
    }

    /**
     * Handle the Team "force deleted" event.
     *
     * @param  \App\Models\Team  $team
     * @return void
     */
    public function forceDeleted(Team $team)
    {
        //
    }
}
