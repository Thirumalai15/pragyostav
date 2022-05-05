@component('mail::message')
# Hey there 👋
This e-mail is to inform you that you have been successfully registered for the event  {{ $team['event_name'] }}

<br>

@component('mail::panel')
<strong>Team Details</strong>
<ul>
    <li>Team Registration ID : <strong>{{ $team['reg_id'] }}</strong></li>
    <li>Team Lead Name  : <strong>{{ $team['team_lead'] }}</strong></li>
    <li>Team Contact no: <strong>{{ $team['team_lead_phone'] }}</strong></li>
@if ($team['member_1'] != null)
        <li>Team Member name: <strong>{{ $team['member_1'] }}</strong></li>
@endif
@if ($team['member_2'] != null)
        <li>Team Member name : <strong>{{ $team['member_2'] }}</strong></li>
@endif
</ul>
@endcomponent

<p>If you have any doubts regarding this event, you can contact us at any time.</p>

@component('mail::panel')
Contact Number : Keshav G - President <strong>9884809092 </strong>
<br>
Contact Email : <strong>eec.ieteforum@gmail.com</strong>
@endcomponent
<p style="text-align: center"><strong>All The Best 😁</strong></p>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
