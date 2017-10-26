@extends('layouts.dashboardlayout')

@section('content')

<!--heder end here-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('/my_plans')}}">Planes</a> </li>
    </ol>
	<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="error container-fluid">
		<div class="row">
			<div class="error-message col-lg-12">
			</div>
		</div>
	</div>
	@if(count($plans))
	@foreach($plans as $plan)
	<div class="w3-agileits-pane">
		<div class="col-md-4 wthree-pan">
			<div class="panel panel-default">
			  <div class="panel-heading"> <i class="fa fa-barcode" aria-hidden="true"></i> {{$plan->name}}</div>
			  <!-- /.panel-heading -->
			  <div class="panel-body">
				<div class="list-group"> 
					<a href="#" class="list-group-item"> <i class="fa fa-calendar" aria-hidden="true"></i> Duración <span class="pull-right text-muted small"><em>{{$plan->duration_string}}</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-comment-o fa-fw"></i> Convsersaciones <span class="pull-right text-muted small"><em>
					@if($plan->conversations_available != null)
					{{$plan->conversations_available}}
					@else
					Ilimitadas
					@endif
					</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-eye fa-fw"></i> Asesoramiento <span class="pull-right text-muted small"><em>
					@if($plan->assesment == 0)
						<i class="fa fa-ban" aria-hidden="true"></i>
					@else
					<i class="fa fa-check" aria-hidden="true"></i>
					@endif
					</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-search fa-fw"></i> Búsqueda <span class="pull-right text-muted small"><em>
					@if($plan->search == 0)
						<i class="fa fa-ban" aria-hidden="true"></i>
					@else
					<i class="fa fa-check" aria-hidden="true"></i>
					@endif
					</em> </span> </a>
					
					<a href="#" class="list-group-item"> <i class="fa fa-credit-card" aria-hidden="true"></i> Precio <span class="pull-right text-muted small"><em>$ {{$plan->price}}</em> </span> </a> 
					
				</div>
				<!-- /.list-group --> 
			  </div>
			  <!-- /.panel-body -->	
							
			</div>
			<form id="plan-form" method="post">
			{{ csrf_field() }}
			<div class="text-center" style="margin-bottom: 13px;">	
				<input type="hidden" name="plan_id" value="{{$plan->id}}">
				@if($plan->id == 2 || $plan->id == 3)
				<button type="submit" disabled class="btn btn-defaul btn-sm"> ADQUIERELO YA</button>
				@elseif($plan->id == 1)
				<button type="submit" class="btn btn-defaul btn-sm"> ADQUIERELO YA</button>
				@endif
				</div>
			</form>
		  </div>
    </div>
	@endforeach
	@endif
	
@endsection

@section('scripts')
<script>
		$(document).ready(function(){
			$('#plan-form').on('submit', function(e){
				e.preventDefault();
				var data = new FormData($(this)[0]);
				$.ajax({
					type: 'POST',
					url: '/assignPlan',
					contentType:false,
					processData:false,
					dataType: "json",
					data: data,
					beforeSend: function(){
					console.log('holi');
					},
				})
				.done(function(data){
					window.location.href='/conversation';
				})
				.fail(function(data){
					if(data.status == 200){
						window.location.href='/conversation';
					}
					var error = data.responseJSON;
					$('.error-message').html('');
					$.each(error.errors, function (key, value) {
						$('.error-message').append('<p>'+value+'</p>')
					});
				});
			});
		});
		
</script>
@endsection
