@php($id = Str::uuid())

<div class="form-check">
    <input class="form-check-input" type="checkbox" {{$attributes->class([
        'value' => 1
    ])}} name="remember" id="{{$id}}">
    <label class="form-check-label" for="{{$id}}">
        {{$slot}}
    </label>
</div>