@extends('layouts.rentcar')
@section('title','Edit Car')

@section('content')

@forelse ($CarDetail as $key=>$data)


<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Edit Detail Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Edit Detail Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  

  <form id="contact" action="../updatecar/{{$data->id}}" method="get">
     @csrf
     {{$data->id}}
    <h2><a>{{$data->nama_mobil}}</a></h2>
    <h4><a>Detail</a></h4>
    <fieldset>
      <input placeholder="Car name" type="text" name="carname" value="{{$data->nama_mobil}}">
    </fieldset>
    <fieldset>
      <input placeholder="Car Price Per Day" type="number" name="carprice" value="{{$data->gambar}}" >
    </fieldset>

    <fieldset>
      <input placeholder="Car Model" type="number" name="carmodel" value="{{$data->model_mobil}}"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Car Seats" type="number" name="carseats" value="{{$data->kapasitas}}"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Address" name="address" type="text" value="{{$data->harag_mobil}}"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="no_telp" type="tel" required>
    </fieldset>

  <input style="display:none"  value='{{ Auth::user()->id }}'  name="user_id"/>
    <fieldset>
 
  <select name="posttype"  id="posttype">
  <option value="{{$data->posttype}}" >{{$data->posttype}}</option>
    <option value="With Driver">Dengan Pengemudi</option>
    <option value="Wihout Driver">Tanpa Pengemudi</option>
  </select>
    </fieldset>

    <fieldset>
    <select name="location" id="Location"  required>
    <option value="{{$data->kota}}">{{$data->kota}}</option>
    <option value="Pontianak">Pontianak</option>
    <option value="Jakarta" >Jakarta</option>
    <option value="Jambi">Jambi</option>
    <option value="Bandung">Bandung</option>
    <option value="Bekasi">Bekasi</option>
    <option value="Bogor">Bogor</option>
    <option value="Depok">Depok</option>
    <option value="Banjar">Banjar</option>
    <option value="Kediri">Kediri</option>
    <option value="Cianjur">Cianjur</option>
    <option value="Malang">Malang</option>
    <option value="Surabaya">Surabaya</option>
    <option value="Balikpapan">Balikpapan</option>
    <option value="Makasar">Makasar</option>
    <option value="Padang">Padang</option>
    <option value="Palembang">Palembang</option>
    <option value="Medan">Medan</option>
  </select>

    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>
@empty
            Tidak ada data ditemukan
        @endforelse

@endsection