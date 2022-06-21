
<link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/side.css" />
			<div class="menu">
				<ul class=" sidenav list-group list-group-flush">

					<li>
				        <div class="user-view">
				            <div class="background">
				                <img src="bootstrap4/img/pexels.jpg">
				            </div>
				                <a href="#user">
				                   <img class="circle" src="bootstrap4/img/carousel2.jpg">
				                </a>
				                <a href="#name">
				                   <span class="white-text name">guest_house</span>
				                </a>
				                <a href="#email">
				                   <span class="white-text email">marhallaview@gmail.com</span>
				                </a>
				        </div>

				    </li>
				    <div class="">
				    	<input id="myInput" placeholder="search.." type="text" name="">
				    </div>
				    <div id="accordion">			    	
	                    <div class="list-group" id="myTable">
	                    	<!-- start link -->
	                    	<li class="item">
	                    		<a href="#" class="list-group-item list-group-item-action btn1" data-toggle="collapse" data-target="#demo1">Guest info</a> 
	                    	</li>
		    				<li class=" item" id="form">
								<a href="#form" class="list-group-item list-group-item-action btn1" data-toggle="collapse" data-target="#demo2">Form</a>
								<div class="panel smenu">
									<div id="demo2" class="collapse show" 
									data-parent="#accordion">									
										<a class="btn text-left" id="customerform">Customer Form</a>
										<a class="btn text-left" id="regist">New Register</a>
								    </div>
								</div>
							</li>

							<li class="item" id="filter">
								<a href="#filter" class="list-group-item list-group-item-action btn1" data-toggle="collapse" data-target="#demo3">Filter</a>
								<div class="panel smenu">
									<div id="demo3" class="collapse show"
									 data-parent="#accordion">								
										<a href="referance/index.php">Referance</a>
										<a href="summary/summary.php">Summary</a>
								    </div>
								</div>
							</li>
							<li class="item">
								<a href="all_data/backend_data.php" class="list-group-item list-group-item-action btn1" data-target="#demo4">All data</a> 
							</li>
							<li class="item" id="checking">
								<a href="#checking" class="list-group-item list-group-item-action btn1" data-toggle="collapse" data-target="#demo5">Checking</a>
								<div class="panel smenu">									
									<div id="demo5" class="collapse show"
									 data-parent="#accordion">
										<a href="pch/pch.php">Proforma Checking hotel</a>
										<a href="occupancy/occupancy.php">Occupancy</a>
								    </div>
								</div>
							</li>
							<!-- include more add link -->

	                        <!-- End link -->
	                    </div>
				    </div>
		
				</ul>											
			</div>
			<div>
                <?php include 'customerform/customer.php'; ?>
            </div>
            <div>
                <?php include 'admin/register.php'; ?>
            </div>
        <script> 
        	    $("#regist").click(function(){
                $("#register").modal();
              });
             $(document).ready(function(){
                $("#customerform").click(function(){
                $("#customer").modal();
              });
             });
            $(document).ready(function(){
            	$('.collapse').collapse()
                     });   
            $(document).ready(function(){
            	     
            $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
               $("#myTable li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
                   });
                     });

        </script>		