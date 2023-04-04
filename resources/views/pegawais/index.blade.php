@extends('pegawais.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Input Pegawai</a>
 </div>
 <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
    </div>
 </div>
 </div>
 <div class="row justify-content-between">
    <div class="col-md-4">
        <form action="{{ route('pegawais.index') }}" method="GET" role="search">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </span>
            </div>
        </form>
    </div>
</div>
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
 <tr>
 <th>Nip</th>
 <th>Nama</th>
 <th>alamat</th>
 <th>jabatan</th>
 <th>gaji_pokok</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($pegawais as $Pegawai)
 <tr>
 
 <td>{{ $Pegawai->nip }}</td>
 <td>{{ $Pegawai->nama }}</td>
 <td>{{ $Pegawai->alamat }}</td>
 <td>{{ $Pegawai->jabatan }}</td>
 <td>{{ $Pegawai->gaji_pokok }}</td>
 <td>
 <form action="{{ route('pegawais.destroy',$Pegawai->nip) }}" method="POST">
 
 <a class="btn btn-info" href="{{ route('pegawais.show',$Pegawai->nip) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('pegawais.edit',$Pegawai->nip) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>

 {{ $pegawais->links() }}
@endsection