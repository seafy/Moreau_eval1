<div class="container">
		<div class="row">
			
				<section>
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="http://cdn.servicemagic.eu/library/forms/FR/Travaux/300x200/pct_sr_180.jpg" alt="Card image cap">
					  <div class="card-block">
					    <h4 class="card-title">
					    <?php 
							foreach ($projets as $key => $value) {
								echo $value['name'];
							}
						 ?>
					    </h4>
					    <p class="card-text">
					    <?php 
							echo $value['bilan'];
						 ?>
					    </p>
					    <a href="#" class="btn btn-primary ">let's go!</a>
					  </div>
					</div>
				</section>

					
				<section>


				</section>
			
		</div>
</div>