@if ($errors->any())
    <div class="alert alert-danger p-2 ">
        <ul class="mb-0 d-flex flex-column gap-1 align-items-start ">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif