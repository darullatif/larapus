@extends('layouts.admin')

@section('content')
<h1>Profile</h1>

<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile</h5>
								</div>
								<div class="card-body text-center">
									<img src="{{ asset('admin/admin/static/img/avatars/h2.png') }}" alt="h2" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">h2 darul</h5>
									<div class="text-muted mb-2">Lead Developer</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Follow</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Skills</h5>
									<a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
									<a href="#" class="badge bg-primary me-1 my-1">Sass</a>
									<a href="#" class="badge bg-primary me-1 my-1">Angular</a>
									<a href="#" class="badge bg-primary me-1 my-1">Vue</a>
									<a href="#" class="badge bg-primary me-1 my-1">React</a>
									<a href="#" class="badge bg-primary me-1 my-1">Redux</a>
									<a href="#" class="badge bg-primary me-1 my-1">UI</a>
									<a href="#" class="badge bg-primary me-1 my-1">UX</a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> rumah<a href="#">baru</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> tanggal <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> lokasi <a href="#">rumah</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">whatsapp</a></li>
										<li class="mb-1"><a href="#">html</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">you tube</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/ronaldo.png') }}" width="36" height="36" class="rounded-circle me-2" alt="ronaldo">
										<div class="flex-grow-1">
											<small class="float-end text-navy">5m ago</small>
											<strong>ronaldo</strong> started following <strong>ronaldo</strong><br />
											<small class="text-muted">Today 7:51 pm</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/messi.png') }}" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
										<div class="flex-grow-1">
											<small class="float-end text-navy">30m ago</small>
											<strong>messi</strong> you win<strong>messi</strong>'s timeline<br />
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												l won world cup in 2022
				
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/dybala.png') }}" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1h ago</small>
											<strong>dybala</strong> posted a new blog<br />

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/febri.png') }}" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
										<div class="flex-grow-1">
											<small class="float-end text-navy">3h ago</small>
											<strong>febri</strong> posted two photos on <strong>febri</strong>'s timeline<br />
											<small class="text-muted">Today 5:12 pm</small>

											<div class="row g-0 mt-1">
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
												</div>
												<div class="col-6 col-md-4 col-lg-4 col-xl-3">
													<img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
												</div>
											</div>

											<a href="#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/neymar.png') }}" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>neymar</strong> started following <strong>neymar</strong><br />
											<small class="text-muted">Yesterday 3:12 pm</small>

											<div class="d-flex align-items-start mt-1">
												<a class="pe-3" href="#">
                <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt=>
              </a>
												<div class="flex-grow-1">
													<div class="border text-sm text-muted p-2 mt-1">
														neymar tu go home brazil
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/sergio.png') }}" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>sergio</strong> posted a new blog<br />
											<small class="text-muted">Yesterday 2:43 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="{{ asset('admin/admin/static/img/avatars/mbape.png') }}" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
										<div class="flex-grow-1">
											<small class="float-end text-navy">1d ago</small>
											<strong>mbape</strong> started following <strong>mbape</strong><br />
											<small class="text-muted">Yesterdag 1:51 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-grid">
										<a href="#" class="btn btn-primary">Load more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
@endsection