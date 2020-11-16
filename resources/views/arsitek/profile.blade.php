@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Daftar User</a></li>
          <li class="breadcrumb-item active">Arsitek Profile</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{auth()->user()->getAvatar()}}"
                   alt="Avatar">
            </div>

            <h3 class="profile-username text-center">{{$arsitek->nama_depan}}</h3>

            <p class="text-muted text-center">Active</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Detail Profile</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong>NIK</strong>
            <p class="text-muted">
              {{$arsitek->nik}}
            </p>
            <hr>
            <strong>Tanggal Lahir</strong>
            <p class="text-muted">
              {{$arsitek->tanggal_lahir}}
            </p>
            <hr>
						<strong>Jenis Kelamin</strong>
						<p class="text-muted">
							{{$arsitek->jenis_kelamin}}
						</p>
						<hr>
						<strong>Alamat</strong>
						<p class="text-muted">
							{{$arsitek->alamat}}
						</p>
						<hr>
						<strong>Email</strong>
						<p class="text-muted">
							{{$arsitek->User->email}}
						</p>
						<hr>
						<strong>Telepon</strong>
						<p class="text-muted">
							{{$arsitek->no_hp}}
						</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
						<div class="panel-body">
							<div class="tab-pane" id="timeline">
								<!-- The timeline -->
								<div class="timeline timeline-inverse">
									<!-- timeline time label -->
									<div class="time-label">
										<span class="bg-danger">
											10 Feb. 2014
										</span>
									</div>
									<!-- /.timeline-label -->
									<!-- timeline item -->
									<div>
										<i class="fas fa-envelope bg-primary"></i>

										<div class="timeline-item">
											<span class="time"><i class="far fa-clock"></i> 12:05</span>

											<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

											<div class="timeline-body">
												Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
												weebly ning heekya handango imeem plugg dopplr jibjab, movity
												jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
												quora plaxo ideeli hulu weebly balihoo...
											</div>
											<div class="timeline-footer">
												<a href="#" class="btn btn-primary btn-sm">Read more</a>
												<a href="#" class="btn btn-danger btn-sm">Delete</a>
											</div>
										</div>
									</div>
									<!-- END timeline item -->
									<!-- timeline item -->
									<div>
										<i class="fas fa-user bg-info"></i>

										<div class="timeline-item">
											<span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

											<h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
											</h3>
										</div>
									</div>
									<!-- END timeline item -->
									<!-- timeline item -->
									<div>
										<i class="fas fa-comments bg-warning"></i>

										<div class="timeline-item">
											<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

											<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

											<div class="timeline-body">
												Take me to your leader!
												Switzerland is small and neutral!
												We are more like Germany, ambitious and misunderstood!
											</div>
											<div class="timeline-footer">
												<a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
											</div>
										</div>
									</div>
									<!-- END timeline item -->
									<!-- timeline time label -->
									<div class="time-label">
										<span class="bg-success">
											3 Jan. 2014
										</span>
									</div>
									<!-- /.timeline-label -->
									<!-- timeline item -->
									<div>
										<i class="fas fa-camera bg-purple"></i>

										<div class="timeline-item">
											<span class="time"><i class="far fa-clock"></i> 2 days ago</span>

											<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

											<div class="timeline-body">
												<img src="http://placehold.it/150x100" alt="...">
												<img src="http://placehold.it/150x100" alt="...">
												<img src="http://placehold.it/150x100" alt="...">
												<img src="http://placehold.it/150x100" alt="...">
											</div>
										</div>
									</div>
									<!-- END timeline item -->
									<div>
										<i class="far fa-clock bg-gray"></i>
									</div>
							</div>
						</div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@stop
