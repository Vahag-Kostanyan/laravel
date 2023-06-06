@props(['color' => 'primary', 'size' => ''])

<button {{$attributes->class([
    "btn btn-{$color} btn-{$size} w-100", ($size ? "btn-{$size}" : '')
])->merge([
    'type' => 'button'
])}}>
    {{$slot}}
</button>
