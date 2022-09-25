@component('mail::message')

    @component('mail::table')
        | Subscriber Email | Date |
        | :------------- | :-------- |
        @foreach($subscriberData as $subscriber)
            | {{$subscriber['email']}} | {{$subscriber['date']}} |
        @endforeach
    @endcomponent

    @lang('Regards'),
    {{ config('app.name') }}
@endcomponent
