@component('layouts.app')

@slot('title') 404 - Page Not Found @endslot

<div class="text-4xl text-grey-darker container mx-auto mt-16 text-center font-bold">
    <div class="text-teal" style="font-size: 16rem">
        404
    </div>
    <div class="mb-8">WHOOPS! Page Not Found</div>
    <a href="{{ url('/') }}" class="text-teal no-underline text-2xl">← Go To Home</a>
</div>

@slot('script')
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="{{ mix('/js/errors/404.min.js') }}"></script>
@endslot

@endcomponent
