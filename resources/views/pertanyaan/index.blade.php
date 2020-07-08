@extends('layouts/main')

@section('title','Daftar Pertanyaan')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1>Daftar Pertanyaan</h1>
                    <a href="/pertanyaan/create" class="btn btn-success my-3">Tambah Pertanyaan</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pertanyaan as $pertanyaan)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$pertanyaan->theme}}</td>
                                    <td>{{$pertanyaan->description}}</td>
                                    <td>
                                        <a href="/jawaban/{{$pertanyaan->id}}" class="badge badge-primary">Jawaban</a>
                                        <a href="/pertanyaan/{{$pertanyaan->id}}" class="badge badge-success">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
</div>
@endsection