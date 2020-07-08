@extends('layouts/main')

@section('title','Tambah Data Pertanyaan')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h3>Pertanyaan: {{$pertanyaan->description}}</h3>
                <h6 class="text-muted">Tema: {{$pertanyaan->theme}}</h6>
                <form method="POST" action="/jawaban/{{$pertanyaan->id}}">
                @csrf
                    <div class="form-group">
                        <h5 for="answer">Jawab: </h5>
                        <textarea type="text" class="form-control @error('answer') is-invalid @enderror" id="answer" placeholder="Masukkan jawaban" name="answer" value="{{old('answer')}}"> </textarea>
                        @error('answer')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>
            </div>
        </div>
</div>
@endsection