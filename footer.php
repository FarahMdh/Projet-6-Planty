</main>
<?php get_sidebar(); ?>
</div>

<footer id="footer" role="contentinfo" class="PageFooter">
<a class="PageFooter__copyright" href="mentions-legales">Mentions Légales</a>
<div id="copyright">
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
</div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>