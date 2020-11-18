@extends('layouts.adminlayouts')

@section('after-style')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<style>
#image-preview{
      display:none;
      width : 250px;
      height : 300px;
  }
</style>
@endsection

@section('main-content')
<div class="container">
  <div class="card mt-3">
    <div class="card-header">
      <h4>Input Data Pasien</h4>
    </div>
    <div class="card-body">

      <div class="container">
        <form action="{{ route('post-tambah-pasien') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input name="pasien_judul" type="text" class="form-control" id="inputnama"
                placeholder="Masukkan cover header...">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama Pasien</label>
            <div class="col-sm-10">
              <input name="pasien_nama" type="text" class="form-control" id="inputnama"
                placeholder="Masukkan nama pasien...">
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-sm-10 my-2">
              <label for="image-preview" class="col-sm-2 col-form-label">Upload Foto</label>
            <img id="image-preview" alt="Preview Gambar "/>
              <br/>
            <input name="gambar" type="file" id="image-source" onchange="previewImage();"/>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="inputkronologi" class="col-sm-2 col-form-label">Kronologi</label>
            <div class="col-sm-10">
              <textarea name="pasien_kronologi"></textarea>
              <script>
                CKEDITOR.replace( 'pasien_kronologi' );
              </script>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputanakkeberapa" class="col-sm-2 col-form-label">Anak Ke-berapa</label>
            <div class="col-sm-10">
              <input name="pasien_anakkeberapa" type="text" class="form-control" id="inputanakkeberapa"
                placeholder="Contoh : Tiga / 3">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputjumlahsaudara" class="col-sm-2 col-form-label">Jumlah Saudara</label>
            <div class="col-sm-10">
              <input name="pasien_jumlahsaudara" type="text" class="form-control" id="inputjumlahsaudara"
                placeholder="Contoh : Empat / 4">
            </div>
          </div>

          <div class="form-group row">

            <label for="inputnamaibu" class="col-sm-2 col-form-label">Nama Ibu Pasien</label>
            <div class="col-sm-4">
              <input name="pasien_namaibu" type="text" class="form-control" id="inputnamaibu"
                placeholder="Masukkan nama ibu pasien...">
            </div>

            <label for="inputnamaayah" class="col-sm-2 col-form-label">Nama Ayah Pasien</label>
            <div class="col-sm-4">
              <input name="pasien_namaayah" type="text" class="form-control" id="inputnamaayah"
                placeholder="Masukkan nama ayah pasien...">
            </div>

          </div>

          <div class="form-group row">

            <label for="inputpekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
            <div class="col-sm-4">
              <input name="pasien_pekerjaanibu" type="text" class="form-control" id="inputpekerjaanibu"
                placeholder="Masukkan pekerjaan ibu...">
            </div>

            <label for="inputpekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
            <div class="col-sm-4">
              <input name="pasien_pekerjaanayah" type="text" class="form-control" id="inputpekerjaanayah"
                placeholder="Masukkan pekerjaan ayah...">
            </div>

          </div>

          <div class="form-group row">
            <label for="inputharapan" class="col-sm-2 col-form-label">Harapan Pasien</label>
            <div class="col-sm-10">
              <input name="pasien_harapan" type="text" class="form-control" id="inputharapan"
                placeholder="Deskripsikan Harapan Pasien...">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputcitacita" class="col-sm-2 col-form-label">Cita-Cita Pasien</label>
            <div class="col-sm-10">
              <input name="pasien_citacita" type="text" class="form-control" id="inputcitacita"
                placeholder="Tuliskan cita-cita pasien...">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputpenanganan" class="col-sm-2 col-form-label">Penanganan</label>
            <div class="col-sm-10">
              <input name="pasien_penanganan" type="text" class="form-control" id="inputpenanganan"
                placeholder="Tahap Penanganan Pasien...">
            </div>
          </div>

          <button type="submit" class="btn btn-success float-right mr-2">Tambah Pasien</button>

        </form>
      </div>


    </div>
  </div>
</div>
@endsection

@section('after-script')

<script>
  CKEDITOR.replace( 'editor1' );
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

@endsection