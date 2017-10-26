@extends('layouts.dashboardlayout')

@section('content')
@if(Auth::user()->user_type == 2)
   
<!--heder end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Cuenta</h3>
								<h4> <a href="{{url('/history')}}"><i class="fa fa-forward" aria-hidden="true"></i></a></h4>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Iniciar conversación</h3>
                                <h4> <a href="{{url('/conversation')}}"><i class="fa fa-forward" aria-hidden="true"></i></a></h4>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Plan Demo</h3>
								<h5>(Vence: 30/Octubre/2017)</h5>
								<h4><a href="{{url('/my_plans')}}"> <i class="fa fa-forward" aria-hidden="true"></i></a></h4>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Conversaciones: 0</h3>
								<h5>(Quedan: 1)</h5>
								<h4> <a href="{{url('/conversation')}}"><i class="fa fa-forward" aria-hidden="true"></i></a></h4>
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap-->
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	
	@endif
@endsection
@section('scripts')
<script src="{{asset('js/raphael-min.js')}}"></script>
<script src="{{asset('js/morris.js')}}"></script>

<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
		@if(Auth::user()->user_type == 1)
			window.location.href = '/conversation';
		@endif
	   
	});
	</script>
@endsection