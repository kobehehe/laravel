@extends('layouts.app')

@section('head')

<div id="gal" class="gallery">
			<div class="container">

				<div class="gallery-grids">
					<div class="gallery-grids-row1">
						<div class=" gallery-grid3">
							<a href="#" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive port-pic" src={{url("images/g1.jpg")}} />
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
								<img class="img-responsive port-pic" src={{url("images/g2.jpg")}} />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<span> SPORTS</span>
										<button>查看详情</button>
									</h2>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
						<div class="head">
						<a class="view-gallery-btn" href="{{url('applyMessage/'.$team->id)}}"style="margin-top:10px">加入球队</a>
						</div>
						<div class="services-us">
				
					<div class="col-md-6 ">
						<img class="img-responsive" src={{$team->team_logo ? url($team->team_logo): url("images/gg.jpg")}} />
						
					</div>
				<div class="col-md-6 us-head">
					<h5>球队简介</H5>
					<h4>队长:{{$team->team_captain_name}}</h4>	
					<P>{{$team->team_description}}</p>
			
				</div>
				<div class="clearfix"> </div>
				</div>
					</div>
						
					</div>
				</div>
			<div class="serives-bottom" style="margin-left:100px;">
			</div>
			</div>
			

@endsection
