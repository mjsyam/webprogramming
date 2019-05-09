@extends('layouts.app')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Data Mahasiswa</h3>
 
				<p>Cari Data Mahasiswa :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/mahasiswa/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari mahasiswa .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>
 
				<table class="table table-bordered">
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Fakultas</th>
						<th>Opsi</th>
					</tr>
					@foreach($mhs as $m)
					<tr>
						<td>{{ $m->nim }}</td>
						<td>{{ $m->nama }}</td>
						<td>{{ $m->jurusan }}</td>
						<td>{{ $m->fakultas }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/mahasiswa/edit/{{ $m->nim }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/mahasiswa/hapus/{{ $m->nim }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
 
				<br/>
				Halaman : {{ $mhs->currentPage() }} <br/>
				Jumlah Data : {{ $mhs->total() }} <br/>
				Data Per Halaman : {{ $mhs->perPage() }} <br/>
				<br/>
 
				{{ $mhs->links() }}
			</div>
		</div>
	</div>
</html>