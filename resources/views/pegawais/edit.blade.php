@extends('pegawais.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Pegawai
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('pegawais.update', $Pegawai->nip) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="nip">nip</label> 
 <input type="text" name="nip" class="form-control" id="nip" value="{{ $Pegawai->nip }}" aria-describedby="nip" > 
 </div>
 <div class="form-group">
 <label for="nama">nama</label> 
 <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}" aria-describedby="nama" > 
 </div>
 <div class="form-group">
 <label for="alamat">alamat</label> 
 <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $Pegawai->alamat }}" aria-describedby="alamat" > 
 </div>
 <div class="form-group">
 <label for="jabatan">jabatan</label> 
 <input type="jabatan" name="jabatan" class="form-control" id="jabatan" value="{{ $Pegawai->jabatan }}" aria-describedby="jabatan" > 
 </div>
 <div class="form-group">
 <label for="gaji_pokok">gaji_pokok</label> 
 
 <input type="gaji_pokok" name="gaji_pokok" class="form-control" id="gaji_pokok" value="{{ $Pegawai->gaji_pokok }}" aria-describedby="gaji_pokok" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection