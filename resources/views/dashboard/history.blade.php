@extends('layouts.dashboardlayout')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a><i class="fa fa-angle-right"></i>Historial</li>
</ol>


<div class="col-sm-12 col-lg-12 col-md-12 w3-agile-crd">
    <div class="card">
        <div class="card-body card-padding">
            <div class="widget">
                <header class="widget-header">
                    <h4 class="widget-title">Compras</h4>
                 </header>
                    <hr class="widget-separator">
                    @if($history)
                                        <div class="widget-body">
                                            <div class="streamline">
                                            @foreach($history as $h)
                                                <div class="sl-item sl-primary">
                                                    <div class="sl-content">
                                                        <small class="text-muted">{{$h->created_at}}</small>
                                                        <p>{{$h->plan['name']}}</p>
                                                        <p> precio: ${{$h->plan['price']}}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                                
                                            </div>
                                        </div>

                                    </div>
                        @endif
                                </div>
                            </div>
                        </div>
						<div class="clearfix"></div>
@endsection