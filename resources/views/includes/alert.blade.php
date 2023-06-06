@if ($alert = session()->pull('alert'))
    <div class="alert alert-success rounded-0 text-center p-2 small" role="alert">
        {{$alert}}
    </div>
@endif
