@extends('pegawais.layout')
 
@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Pegawai
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>nip: </b>{{$Pegawai->nip}}</li>
 <li class="list-group-item"><b>nama: </b>{{$Pegawai->nama}}</li>
 <li class="list-group-item"><b>alamat: </b>{{$Pegawai->alamat}}</li>
 <li class="list-group-item"><b>jabatan: </b>{{$Pegawai->jabatan}}</li>
 <li class="list-groupitem"><b>gaji_pokok: </b>{{$Pegawai->gaji_pokok}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('pegawais.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection