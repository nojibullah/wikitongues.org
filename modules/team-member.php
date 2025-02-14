<?php
	$profile_picture = get_field('profile_picture');
	$profile_pic_id = get_field('profile_pic_v2');
	$leadership_title = get_field('leadership_title');
	$linkedin = get_field('linkedin');
	$twitter = get_field('twitter');
	$website = get_field('website');
	$email = get_field('email');
	preg_match('#https?:\/\/\S+\.[^()]+(?:\([^)]*\))*#', $profile_picture, $parsed_profile_pic_url); 
?>

<div class="wt_team__member">
	<?php if ( $profile_pic_id ): ?>
		<div class="wt_team__member--image"
		 style="background-image:url(<?php echo wp_get_attachment_url($profile_pic_id); ?>);"
		 role="img"
		 aria-label="Headshot of <?php the_title(); ?>"></div>
	<?php elseif( $parsed_profile_pic_url && !$profile_pic_id): ?>
	<div class="wt_team__member--image"
		 style="background-image:url(<?php echo $parsed_profile_pic_url[0]; ?>);"
		 role="img"
		 aria-label="Headshot of <?php the_title(); ?>"></div>
		 <?php else: ?>
	<div class="wt_team__member--noimage"></div>
	<?php endif; ?>


	
	<div class="wt_team__member--info">
		<h2>
			<?php the_title(); ?>
		</h2>

		<p>
			<?php echo $leadership_title; ?>
		</p>

		<?php if ( $linkedin || $twitter || $website ): ?>
		<ul>
			<?php if ( $linkedin ): ?>
			<li>
				<a href="<?php echo $linkedin; ?>">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( $twitter ): ?>
			<li>
				<a href="<?php echo $twitter; ?>">
					<i class="fab fa-twitter-square"></i>
				</a>
			</li>
			<?php endif;?>

			<?php if ( $website ): ?>
			<li>
				<a href="<?php echo $website; ?>">
					<i class="fas fa-link"></i>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( $email ): ?>
			<li>
				<a href="mailto:<?php echo $email; ?>">
					<i class="fas fa-envelope"></i>
				</a>
			</li>
			<?php endif; ?> 
		</ul>
		<?php endif; ?>
	</div>	
</div>