@extends('layouts.app')

@section('head')

<div id="gal" class="gallery">
			<div class="container">
				<div class="head">
					<a class="view-gallery-btn" href="team/create">创建球队</a>
					<a class="view-gallery-btn" href="#"style="margin-top:10px">加入球队</a>
				</div>
				<div class="gallery-grids">
					<div class="gallery-grids-row1">
						<div class=" gallery-grid3">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g1.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span>SPORTS</span>
										<button>查看详情</button>
									</h2>
								</div>
							</a>
						</div>
						<div class=" gallery-grid1">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g2.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
									</h2>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="gallery-grids-row1">
						<div class=" gallery-grid2">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g3.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
										
									</h2>
								</div>
							</a>
						</div>
						<div class=" gallery-grid2">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g4.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
										
									</h2>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
						
					</div>
					<!----->
					<div class="gallery-grids-row1">
						<div class=" gallery-grid1">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g2.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
										
									</h2>
								</div>
							</a>
						</div>
						<div class=" gallery-grid3">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src="images/g1.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
										
									</h2>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			<div class="serives-bottom" style="margin-left:100px;">
				<div class="col-md-4 service-left">
				<h6>企业球队</h6>
					<ul class="service-list">
					@foreach($companyTeams as $cpTeam)
						<li><a href="{{url('team/teamDetail/'.$cpTeam->id)}}">{{$cpTeam->team_name}}</a></li>
					@endforeach
					<li><a href="#">查看更多>></a></li>
					</ul>
				</div>
				<div class="col-md-4 service-left">
				<h6>学校球队</h6>
					<ul class="service-list">
					@foreach($schoolTeams as $scTeam)
					<li><a href="{{url('team/teamDetail/'.$scTeam->id)}}">{{$scTeam->team_name}}</a></li>
					@endforeach
					<li><a href="#">查看更多>></a></li>
					</ul>
				</div>
				<div class="col-md-4 service-left">
				<h6>社会球队</h6>
					<ul class="service-list">
					@foreach($societyTeams as $seTeam)
					<li><a href="{{url('team/teamDetail/'.$seTeam->id)}}">{{$seTeam->team_name}}</a></li>
					@endforeach
					<li><a href="#">查看更多>></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			

@endsection
