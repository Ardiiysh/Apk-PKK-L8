@extends('layouts.layout')

@section('content')
<h1 class="text-center">Kamu itu cuma User</h1>
<a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"   class="dropdown-item">
    <i class="fas fa-users mr-2" ></i> logout
             <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
      @csrf
  </form>
  </a>
@endsection
