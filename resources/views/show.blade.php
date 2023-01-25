@extends('layouts.default')

@section('content')

<html>
    <head>
        <title>Edit Karyawan</title>
        <link rel="stylesheet" href="dist/css/style.css">
    </head>
    <body>
        <div class="container">
            <form action="{{url('/update/'.$data->id)}}" method="POST">
                @csrf
                <div class="links">
                    <h3 class="titel">Edit Kariyawan</h3>
                    <div class="buttons"> 
                    </div>
                </div>
                <div class="input-box">
                    <h3 class="title">Nama Kariyawan</h3>
                    <div class="input">
                        <input type="text" name="nama" placeholder="nama karyawan" value="{{$data->nama}}">
                    </div>
                    <h3 class="title">Alamat Karyawan</h3>
                    <div class="input">
                           <input type="text" name="alamat" placeholder="alamat" value="{{$data->alamat}}">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="" id="remember">
                        <label for="remember">memenuhi syarat</label>
                    </div>
                   <button type="submit" class="btn1">simpan</button>
                </div>
            </form>
        </div>
    </body>
    </html>
    
@endsection