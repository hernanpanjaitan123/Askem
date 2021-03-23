@extends('layouts.master')


@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	  		{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa Izin Bermalam</h1>		
			</div>

			<div class="col-6">
									<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
					  Tambah data Izin Bermlam
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form action="siswa/create" method="POST">
					        	{{csrf_field()}}
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Depan</label>
								    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Belakang</label>
								    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
								  </div>
								 
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
								    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								      <option value="L">Laki-Laki</option>
								      <option value="P">Perempuan</option>
								    </select>
								  </div>

								    <div class="form-group">
								    <label for="exampleInputEmail1">Alasan</label>
								    <input name="alasan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alasan">
								  </div>

								  <div class="form-group">
								    <label for="exampleFormControlTextarea1">Tujuan</label>
								    <textarea name="tujuan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								  </div>

								  
							
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Submit</button>
					        </form>
					      </div>
					    </div>
					  </div>
					</div>			
								</div>
								</div>
		

		<table class="table table-hover">
			
		<tr>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>JENIS KELAMIN</th>
			<th>ALASAN</th> 
			<th>TUJUAN</th>
			<th>Aksi</th>
		</tr>
			@foreach($data_siswa as $siswa)
		<tr>
			<td>{{$siswa->nama_depan}}</td>
			<td>{{$siswa->nama_belakang}}</td>
			<td>{{$siswa->jenis_kelamin}}</td>
			<td>{{$siswa->alasan}}</td>
			<td>{{$siswa->tujuan}}</td>
			<td>
				<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a> 	
			</td>
		</tr>
			@endforeach
		</table>
		
		</div>

		<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        ...
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>			
								
@endsection	

