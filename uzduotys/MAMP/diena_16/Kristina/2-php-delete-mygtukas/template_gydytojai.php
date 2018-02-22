<div class="container">
	<article class="row">

			<?php
			require_once ('./libs/doctors_db.php');
			$gydytojas = getDoctor(1); // gaunam masyva issisaugom kintamajame
			// print_r($gydytojas);
			?>

		<div class="col-6 bg-info">
			<h2> <?php echo $gydytojas['name']; ?></h2>			
			<h2> <?php echo $gydytojas['id']; ?></h2>
		</div>		
		<div class="col-6 bg-warning">
			<h2> <?php echo $gydytojas['lname']; ?></h2>
		</div>
		<a href="delete_doctor.php?numeris=<?php echo $gydytojas['id']; ?>" class="btn bg-danger">DELETE</a>
	</article>
</div>