@extends('layout.main')

@section('sidebar')
<ul class="metismenu" id="menu">
    <li class="nav-label">Status</li>
        <li>
            <a href="{{ route('approval.status') }}">
                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Status</span>
            </a>
        </li>
        
</ul>
@endsection
