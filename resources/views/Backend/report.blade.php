@extends('Backend.backendtemplate')
@section('content')
<link href="{{asset('backend/css/pages/reports.css')}}" rel="stylesheet">

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	
	     <div class="row">
	      	
	      	<div class="span12">
	      
	      	<div class="info-box">
               <div class="row-fluid stats-box">
                  <div class="span4">
                  	<div class="stats-box-title">Vizitor</div>
                    <div class="stats-box-all-info"><i class="icon-user" style="color:#3366cc;"></i> 555K</div>
                    <div class="wrap-chart"><div id="visitor-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart1" class="chart-holder" height="150" width="325"></canvas></div></div>
                  </div>
                  
                  <div class="span4">
                    <div class="stats-box-title">Likes</div>
                    <div class="stats-box-all-info"><i class="icon-thumbs-up"  style="color:#F30"></i> 66.66</div>
                    <div class="wrap-chart"><div id="order-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart2" class="chart-holder" height="150" width="325"></canvas></div></div>
                  </div>
                  
                  <div class="span4">
                    <div class="stats-box-title">Orders</div>
                    <div class="stats-box-all-info"><i class="icon-shopping-cart" style="color:#3C3"></i> 15.55</div>
                    <div class="wrap-chart">
                    
                    <div id="user-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart3" class="chart-holder" height="150" width="325"></canvas></div>
                    
                    </div>
                  </div>
               </div>
               
               
             </div>
               
               
         </div>
         </div>      
	      	
	  	  <!-- /row -->
	
	      <div class="row">
	      	
	      	<div class="span6">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-star"></i>
						<h3>Some Stats</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<canvas id="pie-chart" class="chart-holder" height="250" width="538"></canvas>
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
				
	      		
	      		
	      		
		    </div> <!-- /span6 -->
	      	
	      	
	      	<div class="span6">
	      		
	      		<div class="widget">
							
					<div class="widget-header">
						<i class="icon-list-alt"></i>
						<h3>Another Chart</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<canvas id="bar-chart" class="chart-holder" height="250" width="538"></canvas>
					</div> <!-- /widget-content -->
				
				</div> <!-- /widget -->
									
		      </div> <!-- /span6 -->
	      	
	      </div> <!-- /row -->
	      
	      
	      
	      
			
	      
	      
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    

    

<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="">Open Source jQuery Plugins</a></li>
                            <li><a href="">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="">Free Contact Form Plugin</a></li>
                            <li><a href="">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->

@endsection