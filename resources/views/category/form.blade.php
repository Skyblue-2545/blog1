@extends('layout.app')

@section("title", "Buat Category")

@section("content")
<div class="card">
        <div class="card-header">
            <h5>Buat Category</h5>
        </div>
        <div class="card-body">
        <form method="POSt" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Category</label>
             <input type="judul" class="form-control" id="exampleFormControlInput1" placeholder="judul">
        </div>
        <div>
            <button class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
       
</div>
@endsection