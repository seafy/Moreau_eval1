<div class="container">
		<div class="row">
			
				<?php foreach ($projets as $key => $value) {
					# code...
				 ?>

				<section>
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="<?php echo $value['img']; ?>" alt="Card image cap">
					  <div class="card-block text-center">
					    <h4 class="card-title ">
					    <?php 
							
								echo $value['name'] ." ". $value['firstname'];
						
						 ?>
					    </h4>
					    <p class="card-text">
					    <?php 
							echo $value['bilan'];
						 ?>
					    </p>
					    <em>numero telephone : <br><?php echo $value['phone']; ?></em>
					    <br>
					    <a href="article.php?id=<?php echo $value['id'] ?>" class="btn btn-primary my-3">Fiche</a>
					  </div>
					</div>
				</section>
				<?php } ?>
	
								
		</div>
</div>