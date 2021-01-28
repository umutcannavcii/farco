<?php 
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
  'id' => 0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
				<div class="page-title">
					<div class="page-title">
					<div class="bigtitle">Hakkımızda</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"></div>
				</div>
				<iframe width="700" height="315" src="https://www.youtube-nocookie.com/embed/<?php echo $hakkimizdacek['hakkimizda_video'];?>?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="title-bg">
					<div class="title"><?php echo $hakkimizdacek['hakkimizda_baslik'];?></div>
				</div>
				
				<div class="page-content">
					<p>
					<?php echo $hakkimizdacek['hakkimizda_icerik'];?>
					</p>
					
				</div>
				<div class="title-bg">
					<div class="title">"Misyon"</div>
				</div>
				<blockquote><?php echo $hakkimizdacek['hakkimizda_misyon'];?></blockquote>
				<div class="title-bg">
					<div class="title">"Vizyon"</div>
				</div>
				<blockquote><?php echo $hakkimizdacek['hakkimizda_vizyon'];?></blockquote>
				</div>
			
			<?php include 'sidebar.php'?>
		</div>
		<div class="spacer"></div>
	</div>
	<?php include 'footer.php'?>
