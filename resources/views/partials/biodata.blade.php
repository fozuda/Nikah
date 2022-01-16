@extends('master')

<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="{{route('familyDetails')}}">Family Details</a>
            <a class="p-2 link-secondary" href="{{route('brideGroomMoreDetails')}}"> Bride/Grooms More Details </a>
            <a class="p-2 link-secondary" href="{{route('requirment')}}">Requirment</a>
            <a class="p-2 link-secondary" href="{{route('communication')}}">Communication</a>
        </nav>
    </div>
    
    <div>
    @include('biodata.personal_info')
    </div>


</div>