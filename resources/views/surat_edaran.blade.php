@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
</head>
	<body>
		<div class="container">
			<br>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="panel panel-default">
								<div class="panel-body">
								  <div align="center"><h3>Surat Edaran</h3></div>
									<form action="{{ url('/') }}" class="form-horizontal" role="form" method="POST">

										<div>
											<label for="nama_lengkap" class="col-md-4 control-label">Kepada</label>
											<div class="col-md-6">
												<select id="nama_lengkap" class="form-control" name="nama-lengkap">
													<option value="0">--Pilih Tujuan--</option>
													<option value="1">Kepala Bagian Sekretariat</option>
													<option value="0">Kepala Bagian Tanaman</option>
													<option value="1">Kepala Bagian Teknik</option>
													<option value="0">Kepala Bagian Teknologi</option>
													<option value="1">Kepala Bagian Perencanaan & Pengembangan</option>
													<option value="0">Kepala Bagian Keuangan</option>
													<option value="1">Kepala Bagian Akutansi</option>
													<option value="0">Kepala Bagian Komersil</option>
													<option value="1">Kepala Bagian TI/TB & Manajemen Resiko</option>
													<option value="0">Kepala Bagian SDM</option>
													<option value="1">Kepala Bagian Hukum</option>
													<option value="1">Kepala Bagian PKBL</option>
													<option value="1">Kepala Bagian Pelelangan</option>
													<option value="1">Kepala Bagian SPI</option>
												</select>
											</div>
										</div>

										<div>
											<label for="dari" class="col-md-4 control-label">Dari</label>
											<div class="col-md-6">
                        						<select id="nama_lengkap" class="form-control" name="nama-lengkap">
													<option value="0">--Pilih Asal--</option>
													<option value="1">Kepala Bagian Sekretariat</option>
													<option value="0">Kepala Bagian Tanaman</option>
													<option value="1">Kepala Bagian Teknik</option>
													<option value="0">Kepala Bagian Teknologi</option>
													<option value="1">Kepala Bagian Perencanaan & Pengembangan</option>
													<option value="0">Kepala Bagian Keuangan</option>
													<option value="1">Kepala Bagian Akutansi</option>
													<option value="0">Kepala Bagian Komersil</option>
													<option value="1">Kepala Bagian TI/TB & Manajemen Resiko</option>
													<option value="0">Kepala Bagian SDM</option>
													<option value="1">Kepala Bagian Hukum</option>
													<option value="1">Kepala Bagian PKBL</option>
													<option value="1">Kepala Bagian Pelelangan</option>
													<option value="1">Kepala Bagian SPI</option>
												</select>
											</div>
										</div>

										<div>
											<label for="nomer" class="col-md-4 control-label">Nomor</label>
											<div class="col-md-6">
												<input type="text" id="nomer" class="form-control" name="nomer">
											</div>
										</div>

										<div>
											<label for="tanggal" class="col-md-4 control-label">Tanggal</label>
											<div class="col-md-6">
												<input type="date" id="tanggal" class="form-control" name="tanggal">
											</div>
										</div>

										<div class="col-md-10 col-md-offset-1">
											<textarea id="summernote" type="text" class="form-control" name="isi" >
												Perihal :
  											</textarea>
										</div>
											<script>
												$(document).ready(function() {
													$('#summernote').summernote();

												});

													$('#summernote').summernote({
														height: 300,                 // set editor height
														minHeight: null,             // set minimum height of editor
														maxHeight: null,             // set maximum height of editor
														focus: true                  // set focus to editable area after initializing summernote
												});
											</script>
									</form>
								</div>
							</div>
						</div>
					</div>
				<div class="form-group">
        	    	<div class="col-md-1 col-md-offset-10">
                		<button type="submit" class="btn btn-primary">
                        	Simpan
                    	</button>
              		</div>
        		</div>
	</body>
</html>
@stop
