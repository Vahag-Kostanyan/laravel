@props(['checked' => false, 'name' => ''])
@php($id = Str::uuid())

<div class="form-check">
    <input class="form-check-input" type="checkbox" {{$attributes->class([
        'value' => 1
    ])}} name="{{$name}}" id="{{$id}}" @if($checked) checked @endif > 
    <label class="form-check-label" for="{{$id}}">
        {{$slot}}
    </label>
</div>