<?php include('header.php') ?>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Hamilton Devils</span><br><span style="font-size:14px;">By </span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
			
			
				<h2>Please fill in the game results below</h2>

				<p>Please choose a grade</p><br>
				<select name="grade" id="grade" onchange="showTeam(this.value)">
					<option value="1">Primary/Intermediate Division 1</option>
					<option value="2">Primary/Intermediate Division 2</option>
					<option value="3">Primary/Intermediate Division 3</option>
					<option value="4a">Primary/Intermediate Division 4a</option>
					<option value="4b">Primary/Intermediate Division 4b</option>
					<option value="PW">Primary/Intermediate Division PW</option>
					<option value="Sec-1">Secondary Division 1</option>
					<option value="Sec-2">Secondary Division 2</option>
					<option value="Sec-3">Secondary Division 3</option>
			</select><br><br>

				<form id="game" action="submitscore.php" method="POST">
			
			</form>				
				
			</div>
		</div>

	</section>
	<?php include('footer.php') ?>