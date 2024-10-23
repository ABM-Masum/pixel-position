@props([
    'size' => 'base',
    'tag'
    ])

@php
    $classes = "bg-white/10 font-bold rounded-2xl hover:bg-white/25 transition-colors duration-300";
    if ( $size == 'base')
        {
            $classes .= " text-sm px-5 py-1";
        }
    elseif ( $size == 'small')
        {
            $classes .= " text-xxs px-3 py-1";
        }
@endphp

<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
