@extends('layouts.backend.app')
@section('page','Dashboard')
@section('desc','Selamat Datang di Halaman Dashboard')
@section('content')
@role(['commitee','ranger','new'])
    <div class="card-box">
        <h3>Link Group Whatsapp New Ranger</h3>
        <a href="https://chat.whatsapp.com/K5LN7N3baMyKi2fjSGs63C" target="_blank">Klik Disini</a>
        <h3>Grup kamu adalah 
            @foreach ($data['user']->group as $group)
                {{ $group->nama }}
            @endforeach
        </h3>
        <h5>Kamu di mentori oleh :
            @foreach ($data['user']->group as $group)
                @foreach ($group->mentor as $mentor)
                <p>
                    - {{ $mentor->name }}
                </p>
                @endforeach
            @endforeach
            
            </h5>
        <p>Silahkan masuk ke dalam group whatsapp yang telah di sediakan</p>
        <p>
            @foreach ($data['user']->group as $group)
                <a href="{{$group->desc}}" target="_blank">Klik Disini</a>
            @endforeach
        </p>
    </div>
    <div class="card-box">
        <h3>Daftar Mentee</h3>
        <div class="row">
            @foreach ($data['user']->group as $group)
                @foreach ($group->mentee as $mentee)
                    <div class="col-md-2">
                        <p>- {{ $mentee->name }}</p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endrole
@role(['admin','core'])
<div class="card-box">
    <h3>Stay Tune for more role</h3>
</div>
@endrole
@endsection