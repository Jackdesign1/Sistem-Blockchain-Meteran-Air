@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Dashboard Pengguna</h4>
                </div>
                <div class="card-body">
                    <h5>Selamat Datang, {{ Auth::user()->name }}!</h5>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection