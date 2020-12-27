@component('mail::message')
# Contact Message recieved

{{-- Body --}}
Thank you for your message, it will be treated as soon as possible:

Your Message:

-{{$contact->message}}

{{-- Footer --}}
@component('mail::button', ['url' => '/petase.com'])
Back To Petasi Ordo
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
