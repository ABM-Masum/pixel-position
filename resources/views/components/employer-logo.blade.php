@props(['employer','width' => 90])

<img src="{{ Storage::url($employer->logo) }}" alt="" class="rounded-lg" width="{{$width}}">
