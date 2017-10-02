<div class="container ">
	<div class="row">
		<h2 class="mx-auto"><?php 

		foreach ($lesprojets as $key => $value) {
			# code...
			echo $value['name'] . " " . $value['firstname'];

		}
		 ?>
		 </h2>

		<div class="d-flex justify-content-around w-100">
			<div class="border">
				<section class="">
					<article id="status" class="">
						<?php 
							echo "<strong>Etat des lieux :</strong>" . "<br>";
							echo $value['bilan'];
						 ?>
					</article>

					<article id="info" class="my-3 d-flex flex-column ">
						<strong>Infos du client :</strong>
						<span>nom : <?php echo $value['name']; ?></span>
						<span>prenom : <?php echo $value['firstname']; ?></span>
						<span>numero telephone : <?php echo $value['phone']; ?></span>
						<span>adresse : <?php echo $value['adress']; ?></span>
					</article>

				<section class="my-3 text-center">
					<h4 class="mx-auto">Ouvrier Charger</h4>
					<?php 
						 foreach ($users as $key => $value) {
						 	# code...
						 	
						 	 echo "<strong>nom: </strong>" . $value['name']. " ";
						 	 echo "<strong>prenom: </strong>" . $value['firstname'];
						 	 echo "<br>";
						 }
					 ?>
				</section>

				</section>
			</div>

			<article class="border d-flex flex-column-reverse">
				<p class="mx-auto">image ici:</p>
				<img src="../view/img/1.jpg" >
				<img src="../view/img/2.jpg" >
				<img src="../view/img/3.jpg" >
			</article>
		</div>
	</div>
</div>