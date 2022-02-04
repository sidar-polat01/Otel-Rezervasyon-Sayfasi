@extends('back.extend.master')
@section('content')
    <div class="row col-md-12 mt-2">
        <div class="card shadow mb-4 col-md-12">
            <div class="card-header py-3" style="display: flex">
                <h6 class="m-0 font-weight-bold text-primary col-md-10"><strong>Odalar</strong></h6>
                <a href="{{route('room.create')}}"><button class="btn btn-primary btn-sm ">Oda Oluştur</button></a>
            </div>
            <div class="card-body row mt-3" style="display: flex">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Oda Adı</th>
                        <th>Oda Tipi</th>
                        <th>Durum</th>
                        <th>Bitiş Tarihi</th>
                        <th>Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->title}}</td>
                            <td>{{$room->getCategory->title}}</td>
                            <td>
                                @if($room->status=='active') <button disabled class="btn-success btn-block btn-sm">Dolu</button>
                                @elseif($room->status=='draft') <button disabled class="btn-primary btn-block btn-sm">Rezerve</button>
                                @elseif($room->status=='passive') <button disabled class="btn-secondary btn-block btn-sm">Boş</button>@endif

                            </td>
                            <td>{{$room->finished_at}}</td>
                            <td>{{$room->created_at}}</td><!--diffforHumans()-->
                            <td>
                                <a href="{{route('room.edit',$room->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="{{route('room.delete',$room->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
