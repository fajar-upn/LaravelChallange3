@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row mt-3">
        <!-- 
        * pertanyaan
        -->
        <div class="card mb-2" style="width: 200rem;">
            <div class="card-body">
                <h5 class="card-subtitle mb-1">Created at : {{$pertanyaan->created_at}}</h5>
                <h5 class="card-subtitle mb-2">Update at : {{$pertanyaan->update_at}}</h5>
                <h3 class="card-title">Pertanyaan: {{$pertanyaan->description}} </h3>
                <h6 class="card-subtitle mb-2 text-muted">Tema: {{$pertanyaan->theme}} <br></h6>
                <a href="/jawaban/create/{{$pertanyaan->id}}" class="btn btn-success">Jawab</a>
                <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        <!-- 
        * jawaban
         -->
         
        @foreach($pertanyaan1 as $pertanyaan1)
        <div class="card mt-3" style="width: 200rem;">
            <div class="card-body">
                <h5 class="card-title mb-3 text-muted">{{$loop->iteration}}. Jawab: </h5>
                <h6 class="card-subtitle mb-2">{{$pertanyaan1->answer}} <br></h6>
                <from action="/jawaban/{{$pertanyaan1->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </from>
                <!-- <a href="/jawaban/{{$pertanyaan1->id}}" class="btn btn-danger">Hapus</a> -->
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection