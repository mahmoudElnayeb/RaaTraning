@component('mail::message')
# Introduction

Dear :/ {{$username}} <br>
This Is Message For Test We Just Notify You <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
