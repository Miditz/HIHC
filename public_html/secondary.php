<?php include("header.php") ?>
	<!-- end hr -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Secondary</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
		<h2>Select A Grade </h2>
			<select name="grade" id="grade" onchange="showTable(this.value)">
					<option disabled selected="true">-- Select a Grade --</option>
					<option value="Sec-1">Secondary Division 1</option>
					<option value="Sec-2">Secondary Division 2</option>
					<option value="Sec-3">Secondary Division 3</option>
			</select><br><br>
		<div id="standing">


			</div>			
		</div>
		</div>
	</section>
<?php include("footer.php") ?>
