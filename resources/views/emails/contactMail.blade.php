@component('mail::message')
# New Message From Cyber Falcon

<h1>Name: {{$data['name']}}</h1>
<h1>Email Address: {{$data['email']}}</h1>
<h1>Phone: {{$data['phone']}}</h1>
<h1>Subject: {{$data['subject']}}</h1>
<h1>Message: {{$data['message']}}</h1>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

{{-- Thanks<br> --}}
{{-- {{ config('app.name') }} --}}
@endcomponent
