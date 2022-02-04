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
                    <h6 class="m-0 font-weight-bold text-primary">Oda Güncelle</h6>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('room.edit.post',$room->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ml-1">
                            <label>Oda Adı</label>
                            <input type="text" class="form-control" name="title" value="{{$room->title}}" required />
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kategori</label>
                                <select class="form-control" name="category" required>
                                    <option value="">Seçim Yapınız</option>
                                    @foreach($categories as $category)
                                        <option @if($room->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Oda Durumu</label> <br>
                                <select name="status" id="" class="form-control col-md-12">
                                    <option @if($room->status ==='publish') selected @endif value="active">Dolu</option>
                                    <option @if($room->status ==='passive') selected @endif value="passive">Boş</option>
                                    <option @if($room->status ==='draft') selected @endif value="draft">Rezerve</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ml-2 mt-2">
                            <input id="isFinished" @if($room->finished_at) checked @endif type="checkbox">
                            <label>Bitiş Tarihi Olacak mı?</label>
                        </div>
                        <div id="finishedInput" @if(!$room->finished_at) style="" @endif class="form-group col-md-6">
                            <label>Bitiş Tarihi</label>
                            <input type="datetime-local" name="finished_at" @if($room->finished_at) value="{{ date('Y-m-d\TH:i',strtotime($room->finished_at))}}" @endif class="form-control">
                        </div>

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
