@props(['tag', 'size' => 'base'])

@php
    $classes = 'mr-1 rounded-xl bg-white/10 font-bold transition-colors duration-300 hover:bg-white/25';

        if ($size === 'base') {
            $classes .= " px-5 py-2 text-sm";
        }
        if ($size === 'small') {
            $classes .= " px-3 py-1 text-2xs";
        }
@endphp

<a class="{{ $classes }}"
   href="/tags/{{ strtolower($tag->name) }}">
    {{ $tag->name }}
</a>
