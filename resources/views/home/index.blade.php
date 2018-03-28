@extends('layout.master')

@push('style')
    <style>
        .my-style{font-size:1.6em;}
    </style>
@endpush
@section('jumbotext')
        HOMEPAGE
@endsection

@section('content')
    <?php
    $now = date("Y-m-d H:i:s");
    echo $now;
    $number = 100;
    $html  = "<a href='cs.sci.ku.ac.th'>CS</a>";
    $n = array("a","b");
    ?>

    {{-- Blade Comment --}}


    <p class="other-style">{{ $number}}</p>
    <p>{{ $name or 'AA'}}</p>


    <p>@@{{ $html}}</p>    
    <p>@{{ $html}}</p>    
    <p>{{ $html}}</p>
    <p>{{{ $html}}}</p>
    <p>{!! $html !!}</p>



    @if ($number > 80)
        <p>{{ "Number is ".$number}}</p>
    @elseif ($number > 60)
        <p>Show something</p>
    @else  
        <p>Number <= 60 </p>
    @endif


    @for ($i = 0 ;$i<$number;$i++)
        <p>{{ $i + 1}}: Task...</p>
    @endfor


@endsection

@push('style')
    <style>
        .other-style{color:red;}
    </style>
@endpush