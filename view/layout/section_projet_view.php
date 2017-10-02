<div class="container">
		<div class="row">
			
				<section>
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="http://cdn.servicemagic.eu/library/forms/FR/Travaux/300x200/pct_sr_180.jpg" alt="Card image cap">
					  <div class="card-block text-center">
					    <h4 class="card-title ">
					    <?php 
							foreach ($projets as $key => $value) {
								echo $value['name'] ." ". $value['firstname'];
							}
						 ?>
					    </h4>
					    <p class="card-text">
					    <?php 
							echo $value['bilan'];
						 ?>
					    </p>
					    <em>numero telephone : <br><?php echo $value['phone']; ?></em>
					    <br>
					    <a href="article.php?id=?" class="btn btn-primary my-3">Fiche</a>
					  </div>
					</div>
				</section>
								
		</div>
</div>