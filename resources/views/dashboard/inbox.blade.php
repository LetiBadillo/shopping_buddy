@extends('layouts.dashboardlayout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Inbox</li>
</ol>
<div class="inbox-mail">
	<div class="col-md-4 compose w3layouts">
        <nav class="nav-sidebar">
            <ul class="nav tabs">
            @if(Auth::user()->user_type == 2)
            <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true"><i class="fa 
            fa-pencil"></i>Escribir<div class="clearfix"></div></a></li>
            @endif
            
            <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="true"><i class="fa fa-inbox"></i>Inbox <span>9</span><div class="clearfix"></div></a></li>
            
            </ul>
        </nav>
    </div>
    <!-- tab content -->
    <div class="col-md-8 tab-content tab-content-in w3">
        @if(Auth::user()->user_type == 2)
        <div class="tab-pane text-style active" id="tab1">
            <div class="inbox-right">
                <div class="mailbox-content">
                    <div class="text-center error error-message"> 
                    </div>
                    <div id="chatbox">
                        <form id="start_conversation" action="">
                        {{ csrf_field() }}
                            <div class="form text-center">
                                <br>
                                <p>¿En qué podemos ayudarte?</p>
                                <textarea name="message" required cols="30" rows="5"></textarea>
                                <p>¿Alguna marca de tu interés?</p>
                                <input type="text" name="brands">
                            </div>
                            <div class="text-center">
                                <br>
                                <button class="btn btn-success btn-sm" width="100%" type="submit">Empezar chat</button>
                            </div>
                        </form>
                    </div>
                    <div class="mailbox-content">
                        <div class="hidden chat_template" id="chatarea">
                            <form id="conversation" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea class="form-control"  id="user_message" name="user_message" rows="4"></textarea>
                                    </div>
                                    <div style="margin-bottom: 0;" class="text-center col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <button class="btn btn-success" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif

@if(Auth::user()->user_type == 2)
        <div class="tab-pane text-style" id="tab2">
                <div id="el_chat" class="hidden inbox-right">
                <div class="mailbox-content">
                    <div class="text-center error error-message"> 
                    </div>
                    <div id="chatbox-2">
                    </div>
                    <div class="mailbox-content">
                        <div class="chat_template" id="chatarea">
                        </div>
                    </div>
                </div>
            </div>
            <!--end chat-->
            <div id="los_inbox" class="inbox-right">
                <div class="mailbox-content">
                        <table class="table">
                            <tbody id="inbox_table">

                            </tbody>
                        </table>

                </div>
            </div>
        </div>
@endif
@if(Auth::user()->user_type == 1)
        <div class="tab-pane text-style" id="tab2">
                <div id="el_chat" class="hidden inbox-right">
                <div class="mailbox-content">
                    <div class="text-center error error-message"> 
                    </div>
                    <div id="chatbox">
                    </div>
                    <div class="mailbox-content">
                        <div class="chat_template" id="chatarea">
                            <form id="conversation" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea class="form-control"  id="user_message" name="user_message" rows="4"></textarea>
                                    </div>
                                    <div style="margin-bottom: 0;" class="text-center col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <button class="btn btn-success" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end chat-->
            <div id="los_inbox" class="inbox-right">
                <div class="mailbox-content">
                        <table class="table">
                            <tbody id="inbox_table">

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
@endif




    </div>
    
    <div class="clearfix"> </div>
</div>



@endsection
@section('scripts')
<script>
		$(document).ready(function(){
            var boolean = false;
            window.setInterval(function() {
                    loadLog($('#chatbox').attr('data-id'));
                    }, 3000);

            function scroll(elem){
                window.setInterval(function() {
                    elem.scrollTop = elem.scrollHeight;
                    }, 3000);
            }
            $('#conversation').on('submit', function(e){
                e.preventDefault();
                    var data = new FormData($(this)[0]);
                    @if(Auth::user()->user_type == 2)
                    data.append('message', '<div class="col-md-12 col-sm-12 col-xs-12"> <p class="chat chat-right"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>');
                    @elseif(Auth::user()->user_type == 1)
                    data.append('message', '<div class="col-md-12 col-sm-12 col-xs-12"><p class="chat chat-left"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>');
                    @endif
                    $.ajax({
                        type: 'POST',
                        url: '/shoppingbuddy/'+$('#chatbox').attr('data-id'),
                        contentType:false,
                        processData:false,
                        dataType: "json",
                        data: data,
                        beforeSend: function(){
                        console.log('holi');
                        },
                    })
                    .done(function(data){
                        var msg = '';
                        @if(Auth::user()->user_type == 2)
                            msg = '<div class="col-md-12 col-sm-12 col-xs-12"><p class="chat chat-right"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>';
                            @elseif(Auth::user()->user_type == 1)
                            msg = '<div class="col-md-12 col-sm-12 col-xs-12"><p class="chat chat-left"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>';
                            @endif
                        
                        $('#chatbox').append(msg).animate({scrollTop: $('#chatbox').prop("scrollHeight")}, 500);
                        $('[name="user_message"]').val('');
                    })
                    .fail(function(data){
                        console.log(data);
                        if(data.status == 200){
                            var msg = '';
                            @if(Auth::user()->user_type == 2)
                            msg = '<div class="col-md-12 col-sm-12 col-xs-12"><p class="chat chat-right"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>';
                            @elseif(Auth::user()->user_type == 1)
                            msg = '<div class="col-md-12 col-sm-12 col-xs-12"><p class="chat chat-left"><strong>{{Auth::user()->name}}</strong>:'+$('#user_message').val()+'</p></div>';
                            @endif
                            
                            $('#chatbox').append(msg).animate({scrollTop: $('#chatbox').prop("scrollHeight")}, 500);
                            $('[name="user_message"]').val('');
                        }
                        $('.error-message').html('');
                        $.each(data.error, function (key, value) {
                            $('.error-message').append('<p>'+value+'</p>')
                        });
                    });
                
            });
			$('#start_conversation').on('submit', function(e){
				e.preventDefault();
				var data = new FormData($(this)[0]);
				$.ajax({
					type: 'POST',
					url: '/start_convo',
					contentType:false,
					processData:false,
					dataType: "json",
					data: data,
					beforeSend: function(){
					console.log('holi');
					},
				})
				.done(function(data){
					$('#chatbox').html('').addClass('cremita').append('<p class="chat">Hola, {{Auth::user()->name}}</p>').css('overflow-y', 'scroll').attr('data-id', data.success);
                    $("html, body").animate({ scrollTop: $("#chatbox").scrollTop() }, 1000);
                    $('.chat_template').removeClass('hidden');
                    boolean = true;
				})
				.fail(function(data){
					if(data.status == 200){
                        $('#chatbox').html('').addClass('cremita').append('<p class="chat">Hola, {{Auth::user()->name}}</p>').css('overflow-y', 'scroll').attr('data-id', data.success);
                        $("html, body").animate({ scrollTop: $("#chatbox").scrollTop() }, 1000);
                        $('.chat_template').removeClass('hidden');
					}
					$('.error-message').html('');
					$.each(data.error, function (key, value) {
						$('.error-message').append('<p>'+value+'</p>')
					});
				});
			});
            
            function loadLog(id){	
                if(boolean == true){
                var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;	
                $.ajax({
                    url: "/getChat/"+id,
                    cache: false,
                    method: 'get',
                    success: function(html){	
                        $("#chatbox").html('');
                        $("#chatbox").html(html); //Insert chat log into the #chatbox div				
                        var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                        if(newscrollHeight > oldscrollHeight){
					        $("html, body").animate({ scrollTop: $("#chatbox").scrollTop() }, 1000);
				        }       
                    },
                    error: function(data){
                        var error = data.responseJSON;
                        $('.error-message').html('');
                        $.each(data.error, function (key, value) {
                            $('.error-message').append('<p>'+value+'</p>')
                        });
                    }
                });
                }
            }

            @if(Auth::user()->user_type == 1)
            $.getJSON('/getConversations?user_type={{Auth::user()->user_type}}', function(data){
                var info = '';  
                $(data).each(function(key, value){
                    info +=  '<tr conversation_id="'+value.id+'" class="inbox_row table-row"><td class="table-text"><h6>'+value.userName+'</h6><p>'+value.message+'</p></td><td><span class="mar">'+value.brands+'</span></td><td class="march">'+value.created_at+'</td><td><i class="fa fa-star-half-o icon-state-warning"></i></td></tr>';
                });
                $('#inbox_table').append(info);
                $('.inbox_row').on('click', function(){
                    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;	
                    var c_id = $(this).attr('conversation_id');
                    $('#chatbox').attr('data-id', c_id);
                    boolean = true;
                    $('#el_chat').removeClass('hidden');
                    $('#los_inbox').addClass('hidden');
                    $.ajax({
                    url: "/getChat/"+c_id,
                    cache: false,
                    method: 'get',
                    success: function(html){	
                        $("#chatbox").html('');
                        $("#chatbox").html(html); //Insert chat log into the #chatbox div				
                        var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
                        if(newscrollHeight > oldscrollHeight){
					        $("html, body").animate({ scrollTop: $("#chatbox").scrollTop() }, 1000);
				        }       
                    },
                    error: function(data){
                        var error = data.responseJSON;
                        $('.error-message').html('');
                        $.each(data.error, function (key, value) {
                            $('.error-message').append('<p>'+value+'</p>')
                        });
                    }
                });
                });
            });
            
            @endif
            @if(Auth::user()->user_type == 2)
            $.getJSON('/getConversations?user_type={{Auth::user()->user_type}}', function(data){
                var info = '';  
                $(data).each(function(key, value){
                    info +=  '<tr conversation_id="'+value.id+'" class="inbox_row table-row"><td class="table-text"><h6>'+value.userName+'</h6><p>'+value.message+'</p></td><td><span class="mar">'+value.brands+'</span></td><td class="march">'+value.created_at+'</td><td><i class="fa fa-star-half-o icon-state-warning"></i></td></tr>';
                });
                $('#inbox_table').append(info);
                $('.inbox_row').on('click', function(){
                    var oldscrollHeight = $("#chatbox-2").attr("scrollHeight") - 20;	
                    var c_id = $(this).attr('conversation_id');
                    $('#el_chat').removeClass('hidden');
                    $('#los_inbox').addClass('hidden');
                    $.ajax({
                    url: "/getChat/"+c_id,
                    cache: false,
                    method: 'get',
                    success: function(html){	
                        $("#chatbox-2").html('');
                        $("#chatbox-2").html(html); //Insert chat log into the #chatbox div				
                        var newscrollHeight = $("#chatbox-2").attr("scrollHeight") - 20;
                        if(newscrollHeight > oldscrollHeight){
					        $("html, body").animate({ scrollTop: $("#chatbox-2").scrollTop() }, 1000);
				        }       
                    },
                    error: function(data){
                        var error = data.responseJSON;
                        $('.error-message').html('');
                        $.each(data.error, function (key, value) {
                            $('.error-message').append('<p>'+value+'</p>')
                        });
                    }
                });
                });
            });
            
            @endif
		});
</script>
@endsection