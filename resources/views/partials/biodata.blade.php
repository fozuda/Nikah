@extends('master')

<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">Family Details</a>
            <a class="p-2 link-secondary" href="#"> Bride/Grooms More Details </a>
            <a class="p-2 link-secondary" href="#">Requirment</a>
            <a class="p-2 link-secondary" href="#">Communication</a>
        </nav>
    </div>
    
    <div>
    @include('biodata.personal_info')
    </div>


</div>