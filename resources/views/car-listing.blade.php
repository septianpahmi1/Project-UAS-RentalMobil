@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>List Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>List Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->




<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
  <div class="col-md-9 col-md-push-3">



@forelse ($CarDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="uploads/{{$data->gambar}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="  cardetail/{{$data->id}} ">{{$data->nama_mobil}} </a></h5>
            <p class="list-price">Harga /Hari: Rp. {{$data->harga_mobil}}  </p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->kapasitas}} Kapasitas</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->model_mobil}} model</li>
              <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li>
            </ul>
            <p class="list-city">Kota: {{$data->kota}} </p>

            <a href="cardetail/{{$data->id}} " class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>

        @empty
        Tidak ada data ditemukan
        @endforelse

         </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Temukan Mobil </h5>
          </div>
          <div class="sidebar_filter">
            <form action="search-carresult.php" method="post">
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Pilih Tipe</option>
                  <option>Dengan Pengemudi</option>
                  <option>Tanpa Pengemudi</option>
                </select>
              </div>

             
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Cari Mobil</button>
              </div>
            </form>
          </div>
        </div>

        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> List Mobil Baru</h5>
          </div>
          <div class="recent_addedcars">
            <ul>

            @forelse ($CarDetail as $key=>$data)
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="cardetail/{{$data->id}}"><img src="uploads/{{$data->gambar}}" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="cardetail/{{$data->id}}">{{$data->nama_mobil}}</a>
                  <p class="widget_price">Rp. {{$data->harga_mobil}} /Hari</p>
                </div>
              </li>
              @empty
            Tidak ada data ditemukan
        @endforelse

             
              
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection