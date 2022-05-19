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
     * @param \App\Models\Team $team
     * @return void
     */
    public function created(Team $team)
    {
        //
    }

    /**
     * Handle the Team "updated" event.
     *
     * @param \App\Models\Team $team
     * @return void
     */
    public function updated(Team $team)
    {
        $event = $team->event_name;

        $details = match ($event) {
            'Rc Robo Racing' => [
                'time' => '10:00 AM to 1:00 PM',
                'venue' => 'Volley Ball Court',
                'day' => '26th May 2022'
            ],
            'Drone Racing' => [
                'time' => '10:00 AM to 1:00 PM',
                'venue' => 'TRP Entrance',
                'day' => '26th May 2022'
            ],
            'Robo line follower' => [
                'time' => '10:00 AM to 1:00 PM',
                'venue' => 'Seminar Hall (6th Floor)',
                'day' => '26th May 2022'
            ],
            'Technical Paper Presentation' => [
                'time' => '11:00 AM to 1:00 PM',
                'venue' => 'Seminar hall (IST) or TRP',
                'day' => '26th May 2022'
            ],
            'Hardware Assembling' => [
                'time' => '10:00 AM to 1:00 PM',
                'venue' => 'LAB',
                'day' => '26th May 2022'
            ],
            '3d-printing workshop' => [
                'time' => '10:30 AM to 1:00 PM',
                'venue' => 'Seminar hall (IST)',
                'day' => '26th May 2022'
            ],
            'Virtual Reality workshop' => [
                'time' => '10:30AM to 1:00 PM',
                'venue' => 'Seminar hall (IST)',
                'day' => '27th May 2022'
            ],
            'Robo war' => [
                'time' => '11:00 AM to 1:00 PM',
                'venue' => 'TRP Entrance',
                'day' => '27th May 2022'
            ],
            'Robo Soccer' => [
                'time' => '10:30 AM to 1:00 PM',
                'venue' => 'TRP Entrance',
                'day' => '27th May 2022'
            ],
            'Style Soldering' => [
                'time' => '10:30 AM to 12:30 PM',
                'venue' => 'TRP Entrance',
                'day' => '27th May 2022'
            ],

            default => [],
        };

        $mail = new TeamLeadMail($team,$details);
        Mail::to($team->team_lead_email)->send($mail);
    }

    /**
     * Handle the Team "deleted" event.
     *
     * @param \App\Models\Team $team
     * @return void
     */
    public function deleted(Team $team)
    {
        //
    }

    /**
     * Handle the Team "restored" event.
     *
     * @param \App\Models\Team $team
     * @return void
     */
    public function restored(Team $team)
    {
        //
    }

    /**
     * Handle the Team "force deleted" event.
     *
     * @param \App\Models\Team $team
     * @return void
     */
    public function forceDeleted(Team $team)
    {
        //
    }
}
