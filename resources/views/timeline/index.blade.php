@extends('layouts.default')

@section('css')
	<link href="{{ URL::asset('assets/css/all.css') }}" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" type="text/css">
@stop
	
	<!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
      	<div class="container-fluid">
        	<div class="navbar-header">
          		<a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
          		<a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
          		<a class="navbar-brand" href="index.html">Profilplayers</a>
        	</div>
        	<div class="collapse navbar-collapse" id="main-nav">
          		<ul class="nav navbar-nav"></ul>
          		<ul class="nav navbar-nav navbar-right">
            		<li class="hidden-xs">
              			<a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">
                			<i class="fa fa-comments"></i>
              			</a>
            		</li>
            		<!-- User -->
		            <li class="dropdown">
		              	<a href="#" class="homepage-nav-user dropdown-toggle user" data-toggle="dropdown">
		                	<img src="{{ URL::asset('assets/images/guy.jpg') }}" alt="profile-picture" class="img-circle" width="40" /> {{ $user->surname }} <span class="caret"></span>
		              	</a>
		              	<ul class="dropdown-menu" role="menu">
			                <li><a href="user-private-profile.html">Profile</a></li>
			                <li><a href="user-private-messages.html">Messages</a></li>
			                <li><a href="{{ URL::action('PageController@logout') }}">Logout</a></li>
		              	</ul>
		            </li>
		        </ul>
        	</div>
      	</div>
    </div>
    <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu">
      	<div data-scrollable>
        	<div class="sidebar-block">
          		<div class="profile">
		            <img src="{{ URL::asset('assets/images/guy.jpg') }}" alt="people" class="img-circle" />
		            <h4>{{$user->surname}} <br> {{ $user->name }}</h4>
          		</div>
        	</div>
        	<div class="category">Statistiques Saison</div>
        	<div class="sidebar-block">
		        <ul class="list-about">
		            <li><i class="fa fa-map-marker"></i> 110min</li>
		            <li><i class="fa fa-link"></i> <a href="#">11pts</a></li>
		            <li><i class="fa fa-twitter"></i> <a href="#">3 victoires</a></li>
		        </ul>
        	</div>
        	<div class="category">Next game</div>
        	<div class="sidebar-block">
        		<div class="sidebar-photos">
        			<ul>
        				@for($i=0;$i<=3;$i++)
	        				<li>
	        					<a href="#">Lakers vs Miami Heat</a>
	        				</li>
	        			@endfor
        			</ul>
        			<a href="#" class="btn btn-primary btn-xs">view all</a>
        		</div>
        	</div>
        	<div class="category">Last game</div>
        	<div class="sidebar-block">
        		<ul class="sidebar-feed">
        			<li class="media">
        				<div class="media-left">
        					<span class="media-object">
        						<i class="fa fa-fw fa-bell"></i>
        					</span>
        				</div>
        				<div class="media-body">
        					<a href="" class="text-white">Lakers vs Orlando (110 - 99)</a> 
        					
        					<span class="time">25min</span>
        					<span class="time">5/10</span>
        					<span class="time">4pts</span>
        					<span class="time">2 passes</span>
        					<span class="time">3 rebonds</span>
        					<span class="time">5 fautes</span>
        				</div>
        				<div class="media-right">
        					<span class="news-item-success"><i class="fa fa-circle"></i></span>
        				</div>
        			</li>
        		</ul>
        	</div>
        </div>
    </div>
    <div class="sidebar sidebar-chat right sidebar-size-2 sidebar-offset-0 chat-skin-white" id="sidebar-chat">
    	<div class="split-vertical">
    		<div class="chat-search">
    			<input type="text" class="form-control" placeholder="Search" />
    		</div>

    		<ul class="chat-filter nav nav-pills ">
    			<li class="active"><a href="#" data-target="li">All</a></li>
    			<li><a href="#" data-target=".online">Online</a></li>
    			<li><a href="#" data-target=".offline">Offline</a></li>
    		</ul>
    		<div class="split-vertical-body">
    			<div class="split-vertical-cell">
    				<div data-scrollable>
    					<ul class="chat-contacts">
    						<li class="online" data-user-id="1">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">

    										<div class="contact-name">Jonathan S.</div>
    										<small>"Free Today"</small>
    									</div>
    								</div>
    							</a>
    						</li>

    						<li class="online away" data-user-id="2">
    							<a href="#">

    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Mary A.</div>
    										<small>"Feeling Groovy"</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online" data-user-id="3">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left ">
    										<span class="status"></span>
    										<img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Adrian D.</div>
    										<small>Busy</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="offline" data-user-id="4">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Michelle S.</div>
    										<small>Offline</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="offline" data-user-id="5">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<img src="images/people/110/woman-7.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Daniele A.</div>
    										<small>Offline</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online" data-user-id="6">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/guy-4.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Jake F.</div>
    										<small>Busy</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online away" data-user-id="7">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Jane A.</div>
    										<small>"Custom Status"</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="offline" data-user-id="8">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Sabine J.</div>
    										<small>"Offline right now"</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online away" data-user-id="9">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/woman-9.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Danny B.</div>
    										<small>Be Right Back</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online" data-user-id="10">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">Elise J.</div>
    										<small>My Status</small>
    									</div>
    								</div>
    							</a>
    						</li>
    						<li class="online" data-user-id="11">
    							<a href="#">
    								<div class="media">
    									<div class="pull-left">
    										<span class="status"></span>
    										<img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
    									</div>
    									<div class="media-body">
    										<div class="contact-name">John J.</div>
    										<small>My Status #1</small>
    									</div>
    								</div>
    							</a>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="st-pusher" id="content">
    	<div class="st-content">
    		<div class="st-content-inner">
    			<nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">
    				<div class="container-fluid">
    					<!-- Brand and toggle get grouped for better mobile display -->
    					<div class="navbar-header">
    						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
    							<span class="sr-only">Toggle navigation</span>
    							<span class="fa fa-ellipsis-h"></span>
    						</button>
    					</div>
    					<!-- Collect the nav links, forms, and other content for toggling -->
    					<div class="collapse navbar-collapse" id="subnav">
    						<ul class="nav navbar-nav ">
    							<li class="active"><a href="index.html"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a></li>
    							<li><a href="user-public-profile.html"><i class="fa fa-fw icon-user-1"></i> About</a></li>
    							<li><a href="user-public-users.html"><i class="fa fa-fw fa-users"></i> Friends</a></li>
    						</ul>
    						<ul class="nav navbar-nav hidden-xs navbar-right ">
    							<li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a></li>
    						</ul>
    					</div>
    				</div>
    			</nav>
    			<div class="cover overlay cover-image-full height-300-lg">
    				<img id="homepage-cover" src="{{ URL::asset('assets/images/profile-cover.png') }}" alt="cover" />
    				<div class="overlay overlay-full">
    					<div class="v-top">
    						<a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>
    					</div>
    				</div>
    			</div>
    			<div class="timeline row" data-toggle="isotope">
    				<div class="col-xs-12 col-md-6 col-lg-4 item">
    					<div class="timeline-block">
    						<div class="panel panel-default share clearfix-xs">
    							<div class="panel-heading panel-heading-gray title">
    								What&acute;s new
    							</div>
    							<div class="panel-body">
    								<textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
    							</div>
    							<div class="panel-footer share-buttons">
    								<a href="#"><i class="fa fa-map-marker"></i></a>
    								<a href="#"><i class="fa fa-photo"></i></a>
    								<a href="#"><i class="fa fa-video-camera"></i></a>
    								<button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="col-xs-12 col-md-6 col-lg-4 item">
    					<div class="timeline-block">
    						<div class="panel panel-default relative">
    							<img src="images/place2-full.jpg" alt="place" class="img-responsive">
    							<div class="panel-body panel-boxed text-center">
    								<div class="rating">
    									<span class="star"></span>
    									<span class="star filled"></span>
    									<span class="star filled"></span>
    									<span class="star filled"></span>
    									<span class="star filled"></span>
    								</div>
    							</div>
    							<div class="panel-body">
    								<img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" />
    								<img src="images/people/50/woman-2.jpg" alt="people" class="img-circle" />
    								<img src="images/people/50/guy-3.jpg" alt="people" class="img-circle" />
    								<img src="images/people/50/woman-3.jpg" alt="people" class="img-circle" />
    								<a href="#" class="user-count-circle">12+</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
		</div>
	</div>

@section('script')
	
@stop
