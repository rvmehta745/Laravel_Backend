@extends('admin.layouts.app')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4>Dashboard</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 col-sm-12 text-right">
			<div class="dropdown">
				<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					January 2018
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Export List</a>
					<a class="dropdown-item" href="#">Policies</a>
					<a class="dropdown-item" href="#">View Assets</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix progress-box">
	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
			<div class="progress-box text-center">
				 <input type="text" class="knob dial1" value="66" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#0099ff" readonly>
				<h5 class="text-blue padding-top-10 weight-500">My Earnings</h5>
				<span class="font-14">66% Average <i class="fa fa-line-chart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
			<div class="progress-box text-center">
				 <input type="text" class="knob dial2" value="75" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#41ccba" readonly>
				<h5 class="text-light-green padding-top-10 weight-500">Business Captured</h5>
				<span class="font-14">75% Average <i class="fa fa-line-chart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
			<div class="progress-box text-center">
				 <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#f56767" readonly>
				<h5 class="text-light-orange padding-top-10 weight-500">Projects Speed</h5>
				<span class="font-14">90% Average <i class="fa fa-line-chart"></i></span>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 height-100-p">
			<div class="progress-box text-center">
				 <input type="text" class="knob dial4" value="35" data-width="120" data-height="120" data-thickness="0.05" data-fgColor="#a683eb" readonly>
				<h5 class="text-light-purple padding-top-10 weight-500">Panding Orders</h5>
				<span class="font-14">35% Average <i class="fa fa-line-chart"></i></span>
			</div>
		</div>
	</div>
</div>
<div class="bg-white pd-30 box-shadow border-radius-5 mb-30 xs-pd-20-10">
	<div class="row clearfix">
		<div class="col-lg-3 col-md-6 col-sm-12">
			<h4 class="mb-30">Browser Visit</h4>
			<div class="browser-visits">
				<ul>
					<li class="d-flex flex-wrap align-items-center">
						<div class="icon"><img src="vendors/images/chrome.png" alt=""></div>
						<div class="browser-name">Google Chrome</div>
						<div class="visit"><span class="badge badge-pill badge-primary">50%</span></div>
					</li>
					<li class="d-flex flex-wrap align-items-center">
						<div class="icon"><img src="vendors/images/firefox.png" alt=""></div>
						<div class="browser-name">Mozilla Firefox</div>
						<div class="visit"><span class="badge badge-pill badge-secondary">40%</span></div>
					</li>
					<li class="d-flex flex-wrap align-items-center">
						<div class="icon"><img src="vendors/images/safari.png" alt=""></div>
						<div class="browser-name">Safari</div>
						<div class="visit"><span class="badge badge-pill badge-success">40%</span></div>
					</li>
					<li class="d-flex flex-wrap align-items-center">
						<div class="icon"><img src="vendors/images/edge.png" alt=""></div>
						<div class="browser-name">Microsoft Edge</div>
						<div class="visit"><span class="badge badge-pill badge-warning">20%</span></div>
					</li>
					<li class="d-flex flex-wrap align-items-center">
						<div class="icon"><img src="vendors/images/opera.png" alt=""></div>
						<div class="browser-name">Opera Mini</div>
						<div class="visit"><span class="badge badge-pill badge-info">20%</span></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-9 col-md-6 col-sm-12">
			<div id="browservisit" style="width:100%!important; height:415px"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-md-12 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 xs-pd-20-10 height-100-p">
			<h4 class="mb-30">Compliance Trend</h4>
			<div id="compliance-trend" class="compliance-trend"></div>
		</div>
	</div>
	<div class="col-lg-4 col-md-12 col-sm-12 mb-30">
		<div class="bg-white pd-30 box-shadow border-radius-5 xs-pd-20-10 height-100-p">
			<h4 class="mb-30">Records</h4>
			<div id="chart" class="chart"></div>
		</div>
	</div>
</div>
@endsection