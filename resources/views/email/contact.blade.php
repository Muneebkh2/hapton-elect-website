@component('mail::message')
    Name: {{$customerContactMessage->name}} <br>
    Email: {{$customerContactMessage->email}} <br>
    Message: {{$customerContactMessage->message}} <br><br>

    @lang('Regards'),
    {{ config('app.name') }}
@endcomponent
