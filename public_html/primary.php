<?php include('header.php') ?>
	<!-- end hr -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Primary/Intermediate</li>
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
					<option disabled selected="true">-- Select a Grade -- </option>
					<option value="1">Primary/Intermediate Division 1</option>
					<option value="2">Primary/Intermediate Division 2</option>
					<option value="3">Primary/Intermediate Division 3</option>
					<option value="4a">Primary/Intermediate Division 4a</option>
					<option value="4b">Primary/Intermediate Division 4b</option>
			</select><br><br>
			<div id="standing" style="padding-bottom:30px;">
				

			</div>
			<h3>Primary Draw</h3>
			<h6 id="show">click here</h6>
			<div id="draw" style="display:none;" >
    <object  class="pdf" data="primaryDraw.pdf" type="application/pdf" width="100%" height="500px">
</object></div>
			
		</div>
		</div>
	</section>
<?php include("footer.php") ?>