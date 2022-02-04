@extends('back.extend.master')
@section('content')
    <div class="container-fluid">

        <style>
            .tablo{
                background-color: white;
            }
        </style>
        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3" style="display: flex">
                <h6 class="m-0 font-weight-bold text-primary col-md-10"><strong>Odalar</strong></h6>
                <a href="{{route('category.create')}}"><button class="btn btn-primary btn-sm ">Oda Tipi Oluştur</button></a>
            </div>
            <div class="card-body tablo">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th style="text-align: center; font-size: 23px">Fotoğraf</th>
                            <th>Kategori Başlığı</th>
                            <th style="text-align: center; font-size: 23px">Oda Açıklaması</th>
                            <th style="text-align: center; font-size: 23px">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <img src="{{asset($category->image)}}" class="img-thumbnail rounded" width="350">
                                </td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('category.delete',$category->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
