<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - NUIT DE L'INFO</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
	<body>
	<!-- Contenu de page -->
	    <section class="single_calendar single_calendar_1">
	    	<div class="container" style="width: 85%;">
	    		<!-- Titre -->
					<div class="row">
						<div class="col-md-10 col-lg-12" style="margin-bottom: -35px;">
				    		<h2 style="font-size: 45px;">404 non trouvé - Essayez de Gagner</h2>
				    	</div>
			    	</div> 
	    		<!-- #FIN# Titre -->
	    		<!-- Gestion Modal -->
					<div class="row cal_maincontent" style="border-radius: 9px">
						<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2" style="margin-bottom: 25px;">
							<!-- appel Modal -->
								<div class="row">
									<?php $id = range(1,30); foreach ($id as $x) { ?>
									<div class="col-md-2 col-xs-6 col-sm-4" style="margin-top: 30px;">
										<div class="test case_cursor">
											<a href="#myModal-<?php echo $x ?>" data-toggle="modal" data-target="#myModal-<?php echo $x ?>">
												<button class="btn-dev1" style="border: solid 2px #fff;">
													<span class="case_img case_img_<?php echo $x; ?>" style="font-size: 45px;"><?php echo $x ?></span>
												</button>
											</a>
										</div>
									</div>
									<?php } ?>
								</div>
							<!-- #FIN# appel Modal -->				
							<!-- Modal -->
								<?php 
									$link = mysqli_connect('localhost', 'root', '', 'calender');
									$modalCount = 30;
									$d = date('j');
									for ($x = 1 ; $x <= $modalCount ; $x++):
									$req = mysqli_query($link, "SELECT * FROM `case_calendrier` WHERE `indice` = ".$x);
									$case = mysqli_fetch_assoc($req);
								?>
									<div id="myModal-<?php echo $x;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg kdo_modal kdo_modal-u1 kdo_modal-u1-j<?php echo $x;?>">
										    <!-- Modal content-->
										    <div class="modal-content" style="text-align: center; padding: 25px;">
										    	<div class="modal-header">
										    		<h1>Astuce de jour</h1>
										    	</div>
										    	<div class="modal-body">
													<div class="modal_description">
														<p style="font-size: 30px; color: blue"><?php echo $case['description']; ?></p>
										    		</div>
										    		<div class="modal_media">
											    		<img src="http://www.lastucedujour.com/wp-content/uploads/2016/10/cropped-Astuce1_feat.jpg">

										    		</div>
										    	</div>
										    	
										    	<div class="modal_bouton">
										    		<a href="<?php echo $case['lien']; ?>" target="_blank">
											    		<button id="myBtn" class="btn btn-sm btn-info col-md-4 col-md-offset-4 modal_btn">
											    			Votre cadeau ici -> CHERCHE LE
											    		</button>
										    		</a>
										    	</div>
										    	<div class="modal_bouton">
										    		<div id="topBar"> 
										    			<a href="javascript:history.back()">
											    			<button id="myBtn" class="btn btn-sm btn-success col-md-4 col-md-offset-4 modal_btn">
											    				Retour a la page précédente
											    			</button>
										    			</a>
										    		</div>
										    	</div>
										    </div>
										</div>
									</div>
								<?php endfor; ?>
							<!-- #FIN# Modal -->
						</div>
					</div>
				<!-- #FIN# Gestion Modal -->
			</div>
		</section>
	<!-- #FIN# Contenu de page -->
	<!-- Script -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- #FIN# script -->
	</body>
</html>