@extends('layouts.default')

@section('content')
    
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>TAMBAH KARYAWAN</h1>
                <a href="{{url('create')}}" class="btn btn-primary">+ Tambah Karyawan</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Edit/Delete</th>
                    </tr>
                    @foreach($data as $dataKholis)
                    <tr>
                        <td>{{$dataKholis->id}}</td>
                        <td>{{$dataKholis->nama}}</td>
                        <td>{{$dataKholis->alamat}}</td>
                        <td>
                            <a href="{{url('/show/'.$dataKholis->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('/destroy/'.$dataKholis->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection