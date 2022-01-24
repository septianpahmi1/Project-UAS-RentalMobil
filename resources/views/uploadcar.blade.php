@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Upload Post</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Upload Post</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  
  <form id="contact" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h2><a>Upload Mobil</a></h2>
    <h4><a>Detail</a></h4>
    <fieldset>
      <input placeholder="Nama Mobil" type="text" name="nama_mobil"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Harag mobil /Hari" type="number" name="harga_mobil"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Model mobil" type="number" name="model_mobil"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Kapasitas mobil" type="number" name="kapasitas"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Alamat" name="alamat" type="text"  required>
    </fieldset>

    <fieldset>
   <input id="carpic" type="file" name="gambar"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
  <select name="posttype" id="posttype">
  <option value="" disabled selected>Select Car Type</option>
    <option value="With Driver">With Driver</option>
    <option value="Without Driver">Without Driver</option>
  </select>

    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>


@endsection