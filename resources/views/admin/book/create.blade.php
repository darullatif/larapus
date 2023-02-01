@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Penulis</div>
                    <div class="card-body">
                        <form action="{{route('book.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama Penulis</label>
                                <input type="text" name="title" class="form-control @error('name') is-invalid @enderror">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="">Author</label>
                            <select class="form-select" aria-label="Default select example" name="author_id" id="">
                                <option value="{{$item->id}}">{{$item->name }}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="amount" class="form-control @error('amount') is-invalid @enderror">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">cover</label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                                @error('covert')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                    @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection