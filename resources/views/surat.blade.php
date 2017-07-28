<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
                <!-- Styles --><link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <form action="{{ url('/edit') }}" method="POST">
                           {!! csrf_field() !!}
                                        <div>
                                            <label for="nama_lengkap" class="col-md-4 control-label">Kepada</label>
                                            <div class="col-md-6">
                                                <select id="nama" class="form-control" name="kepada">
                                                    <option value="0">--Pilih Tujuan--</option>
                                                    <option value="Kepala Bagian Sekretariat">Kepala Bagian Sekretariat</option>
                                                    <option value="Kepala Bagian Tanaman">Kepala Bagian Tanaman</option>
                                                    <option value="Kepala Bagian Teknik">Kepala Bagian Teknik</option>
                                                    <option value="Kepala Bagian Teknologi">Kepala Bagian Teknologi</option>
                                                    <option value="Kepala Bagian Perencanaan & Pengembangan">Kepala Bagian Perencanaan & Pengembangan</option>
                                                    <option value="Kepala Bagian Keuangan">Kepala Bagian Keuangan</option>
                                                    <option value="Kepala Bagian Akutansi">Kepala Bagian Akutansi</option>
                                                    <option value="Kepala Bagian Komersil">Kepala Bagian Komersil</option>
                                                    <option value="Kepala Bagian TI/TB & Manajemen Resiko">Kepala Bagian TI/TB & Manajemen Resiko</option>
                                                    <option value="Kepala Bagian SDM">Kepala Bagian SDM</option>
                                                    <option value="Kepala Bagian Hukum">Kepala Bagian Hukum</option>
                                                    <option value="Kepala Bagian PKBL">Kepala Bagian PKBL</option>
                                                    <option value="Kepala Bagian Pelelangan">Kepala Bagian Pelelangan</option>
                                                    <option value="Kepala Bagian SPI">Kepala Bagian SPI</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="dari" class="col-md-4 control-label">Dari</label>
                                            <div class="col-md-6">
                        <select id="dari" class="form-control" name="dari">
                                                    <option value="0">--Pilih Asal--</option>
                                                    <option value="Kepala Bagian Sekretariat">Kepala Bagian Sekretariat</option>
                                                    <option value="Kepala Bagian Tanaman">Kepala Bagian Tanaman</option>
                                                    <option value="Kepala Bagian Teknik">Kepala Bagian Teknik</option>
                                                    <option value="Kepala Bagian Teknologi">Kepala Bagian Teknologi</option>
                                                    <option value="Kepala Bagian Perencanaan & Pengembangan">Kepala Bagian Perencanaan & Pengembangan</option>
                                                    <option value="Kepala Bagian Keuangan">Kepala Bagian Keuangan</option>
                                                    <option value="Kepala Bagian Akutansi">Kepala Bagian Akutansi</option>
                                                    <option value="Kepala Bagian Komersil">Kepala Bagian Komersil</option>
                                                    <option value="Kepala Bagian TI/TB & Manajemen Resiko">Kepala Bagian TI/TB & Manajemen Resiko</option>
                                                    <option value="Kepala Bagian SDM">Kepala Bagian SDM</option>
                                                    <option value="Kepala Bagian Hukum">Kepala Bagian Hukum</option>
                                                    <option value="Kepala Bagian PKBL">Kepala Bagian PKBL</option>
                                                    <option value="Kepala Bagian Pelelangan">Kepala Bagian Pelelangan</option>
                                                    <option value="Kepala Bagian SPI">Kepala Bagian SPI</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="nomer" class="col-md-4 control-label">Nomor</label>
                                            <div class="col-md-6">
                                                <input type="text" id="no" class="form-control" name="no">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                                            <div class="col-md-6">
                                                <input type="date" id="tanggal" class="form-control" name="tanggal">
                                            </div>
                                        </div>

                    <div>
                                            <label for="hal" class="col-md-4 control-label">Hal</label>
                                            <div class="col-md-6">
                                                <input type="text" id="perihal" class="form-control" name="hal">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-md-offset-1">

                                            
                                            <textarea id="summernote" type="text" name="isi" class="form-control">
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

                                    <div class="form-group">
                                            <div class="col-md-1 col-md-offset-10">
                                                <button type="submit" class="btn btn-primary">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
              
            </div>
        </div>
    </body>
</html>
