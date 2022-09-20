@extends('layouts.backend.app')
@section('page','Dashboard')
@section('desc','Selamat Datang di Halaman Dashboard')
@section('content')
    <div class="card-box">
        <h4>Stay Tune</h4>
        @role(['commitee','ranger','new'])
            <h3>Grup kamu adalah 
                @foreach ($data['user']->group as $group)
                    {{ $group->nama }}
                @endforeach
            </h3>
            <p>Silahkan masuk ke dalam group whatsapp yang telah di sediakan</p>
            <p>
                @foreach ($data['user']->group as $group)
                    <a href="{{$group->desc}}" target="_blank">Klik Disini</a>
                @endforeach
            </p>
        @endrole
    </div>
@endsection