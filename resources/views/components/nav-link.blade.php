@props([
    'type' => 'a',
    'active'
])

@if($type === 'a')
    <a {{ $attributes(['class' => $active ? 'text-blue-800' : 'text-white' . ' hover:text-blue-800 transition-colors duration-200']) }}>{{ $slot }}</a>
@else
    <button {{ $attributes(["class" => "hover:text-blue-800 transition-colors duration-200"]) }}>{{ $slot }}</button>
@endif

