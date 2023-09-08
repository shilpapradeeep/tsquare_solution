@component('mail::message')

@if($contact['status'] == '1')
    # Mail Received
    Name: {{$contact['data']['c_name']}},
    Email : {{$contact['data']['c_email']}}
    Phone : {{$contact['data']['c_phone']}}
    Message : {{$contact['data']['c_message']}}
@else
    # Thank You
    {{$contact['data']}}

    Thank you,<br>
    {{ config('app.name') }}
@endif


@endcomponent
