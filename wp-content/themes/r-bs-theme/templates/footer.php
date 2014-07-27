<footer class="content-info" role="contentinfo">
	<div class="container">
		<?php dynamic_sidebar('sidebar-footer'); ?>
		<p class="mb0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		<div style="position:relative;">
			<img src="<?php echo child_template_directory;?>/assets/img/rechte_ecke.jpg" alt="footer Ecke" id="footer_ecke">
			<img src="<?php echo child_template_directory;?>/assets/img/rechte_ecke_small.jpg" alt="footer Ecke" id="footer_ecke_small">
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
