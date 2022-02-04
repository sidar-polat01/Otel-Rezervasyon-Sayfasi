@extends('back.extend.master')
@section('content')
    <style>
        .set{
            margin-left: 300px;
            margin-top: 50px;
        }
    </style>
    <div class="row">
        <div class="col-md-5 set">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @elseif(session('danger'))
                <div class="alert alert-danger">
                    {{session('danger')}}
                </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Yeni Tip Oluştur</h6>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('category.create.post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ml-2">
                            <label>Oda Adı</label>
                            <input type="text" class="form-control" name="title" required />
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group ml-2">
                            <label>Oda Açıklaması</label>
                            <textarea name="description" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary btn-block">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
