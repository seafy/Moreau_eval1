<div class="container ">
	<div class="row">
		<h2 class="mx-auto"><?php 

		foreach ($theprojets as $key => $value) {
			# code...
			echo $value['name'] . " " . $value['firstname'];

		
		 ?>
		 </h2>

		<div class="d-flex justify-content-around w-100">
			<div class="border">
				<section class="text-center">
					<article id="status">
						<i class="fa fa-sticky-note-o" aria-hidden="true"></i><br>
						<b>Etat des lieux :</b>
						<?php 
							echo "<br>";
							echo $value['bilan'];
						 ?>
					</article>

					<hr>

					<article id="info" class="my-3 d-flex flex-column text-center">
						<i class="fa fa-id-card-o" aria-hidden="true"></i>
						<strong>Infos du client :</strong>
						<span>nom : <?php echo $value['name']; ?></span>
						<span>prenom : <?php echo $value['firstname']; ?></span>
						<span>numero telephone : <?php echo $value['phone']; ?></span>
						<span>adresse : <?php echo $value['adress']; ?></span>
					</article>

					<hr>

					<section class="my-3 text-center">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h5 class="mx-auto">Ouvrier Charger</h5>
						<?php 
							
							 	# code...
							 	
							 	 echo "<strong>prenom: </strong>" . $value['worker'];
							 	 echo "<br>";
							 }
						 ?>
					</section>

				<hr>

				</section>
			</div>

			<article class="border d-flex flex-column-reverse">
				<img src="../view/img/1.jpg" >
				<img src="../view/img/2.jpg" >
				<img src="../view/img/3.jpg" >
			</article>
		</div>
	</div>
</div>