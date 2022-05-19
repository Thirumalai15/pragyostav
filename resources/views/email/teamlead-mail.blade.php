@component('mail::message')
# Hey there 👋
This e-mail is to inform you that you have been successfully registered for the event  {{ $team['event_name'] }}

<br>

@component('mail::panel')
<strong>Your registration details</strong>
<ul>
<li>Registration ID : <strong>{{ $team['reg_id'] }}</strong></li>
<li>Name  : <strong>{{ $team['team_lead'] }}</strong></li>
<li>Contact no: <strong>{{ $team['team_lead_phone'] }}</strong></li>
<li>College: <strong>{{ $team['team_lead_college'] }}</strong></li>
@if ($team['member_1'] != null)
<li>First Teammate : <strong>{{ $team['member_1'] }}</strong></li>
@endif
@if ($team['member_2'] != null)
<li>Second Teammate : <strong>{{ $team['member_2'] }}</strong></li>
@endif
@if ($team['member_3'] != null)
<li>Third Teammate : <strong>{{ $team['member_2'] }}</strong></li>
@endif
</ul>
@endcomponent

<p>For queries contact us at any time.</p>

@component('mail::panel')
Keshav G - President <strong>9884809092 </strong>
Vishwa T - Treasurer <strong>9600297742 </strong>
<br>
Drop a mail @ <strong>eec.ieteforum@gmail.com</strong>
@endcomponent
<p style="text-align: center"><strong>All The Best 😁</strong></p>
<br>

Thanks,<br>
Team Pragyotsav
@endcomponent
