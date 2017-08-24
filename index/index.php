<!-- Modal контакты -->
<div class="modal fade" id="Contacts" tabindex="-1" role="dialog" aria-labelledby="Contacts">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="Contacts">КОНТАКТЫ</h4>
			</div>
			<div class="modal-body">
				<p class="red shift">Пожалуйста, выберите вашу страну:</p>
				<div class="row">
		
    
    //тут начинается вывод внутреннего окна
    <div class="col-sm-4">
 	<?php
		$args = array('post_type' => 'countries', 'posts_per_page' => 14, 'order' => 'ASC',);
		$query_country = new WP_Query($args);
		if ($query_country->have_posts()) {
			while($query_country->have_posts()) {
				$query_country->the_post();
				//print_r($query_country);
	?>
	<div class="text-left country-wrapper">
		<a data-toggle="modal" data-target="#country-<?php the_title(); ?>">     
			<?php 
			echo '<div class="country ' .  get_the_title() . '">' . '</div>';
			echo '<div class="country-name"> ' . get_the_title() . '</div>';
			?>
		</a>
	</div>
	<!--modal for single country-->
	<div class="modal fade for-countries" id="<?php echo 'country-' . get_the_title(); ?>" tabindex="-1" style="" role="dialog" aria-labelledby="<?php echo 'country-' . get_the_title(); ?>">
		<div class="modal-dialog" role="document" style="height: 100%;">
			<div class="modal-content" style="height: 100%;">
				<div class="modal-header">
					<button class="close" type="button" id="<?php echo get_the_title(); ?>" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="<?php echo 'country-' . get_the_title(); ?>"><?php echo get_the_title(); ?></h4>
				</div>
				<div class="modal-body">
					<div class="country-content" style="width: 50%; margin-left: 25%;">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--закрываем второе окно без закрытия первого-->
<script>
  jQuery(document).ready(function(){
    jQuery("#<?php echo get_the_title(); ?>").click(function() {
      jQuery("<?php echo '#country-' . get_the_title(); ?>").modal('hide');
    });
  });
</script>

	<?php 
			}
		}
 	?>

 	</div>
    //тут заканчивается вывод внутреннего
    
    
    
				</div><!--endrow-->
			</div>
		</div>
	</div>
</div>
