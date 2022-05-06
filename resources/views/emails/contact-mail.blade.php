@component('mail::message')
# Hey there!
New message request from {{ $data['name'] }}

<p>Message: {{ $data['body'] }}</p>

@endcomponent
