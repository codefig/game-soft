@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url'), 'title' => 'Soemthing Veirficto'])
            WeeDoo-Documents
        @endcomponent
    @endslot
{{-- Body --}}

  @slot('greeting')
    Hello {{ $user }},
  @endslot

  @slot('otherMessage')
    Please verify your WeeDoo-Documents account by clicking the button below
  @endslot

        @slot('bodycontents')
            @component('mail::button', ['url' => $url, 'slot' => $title])
                Account Verification
            @endcomponent

            Please ignore the message, if you didn't make the request.
        @endslot

{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
               Yours, WeeDoo-Documents Team.
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} WeeDoo-Documents. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
