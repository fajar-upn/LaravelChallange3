@extends('layouts/main')

@section('title','Daftar Pertanyaan')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h1>Daftar Pertanyaan</h1>
                    <a href="/pertanyaan/create" class="btn btn-primary my-3">Tambah Data Pertanyaan</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        @foreach($pertanyaan as $p)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$p->title}}
                            <!-- <a href="/pertanyaan/{{$p->id}}" class="badge badge-info">Detail</a> -->
                        </li>
                        @endforeach
                    </ul>
            </div>
        </div>
</div>
@endsection