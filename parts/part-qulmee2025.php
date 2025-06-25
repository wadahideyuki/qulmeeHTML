<?php /* Template Name: 2025Qulmee用テンプレート*/ get_template_part("parts/part-header-qulmee"); ?>

<?php if (get_field('header_color')): ?>
	<section class="pageHeader02 qulmee2025 " style="background: <?php the_field('header_color'); ?>">
	<?php else: ?>
		<section class="pageHeader02 qulmee2025 ">
		<?php endif; ?>
		<main class="qulmee-content">
			

			<?php the_post(); ?>
			<?php the_content(); ?>
		</main>
		<?php get_template_part("parts/part-footer-qulmee"); ?>