@extends('layouts.admin')

@section('content')
<h2 class="page-title">Dashboard</h2>	
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase">Pengguna</div>
												</div>
											</div>
											<a href="reg-users" class="block-anchor panel-footer">Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<div class="stat-panel-number h1 ">total</div>
													<div class="stat-panel-title text-uppercase">List Mobil</div>
												</div>
											</div>
											<a href="allcars" class="block-anchor panel-footer text-center">Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
											
													<div class="stat-panel-number h1 ">Lainnya</div>
													<div class="stat-panel-title text-uppercase">Setting Lainnya</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					




@endsection