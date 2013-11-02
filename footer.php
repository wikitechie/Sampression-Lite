<?php
/**
 * The template for displaying the footer.
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */
?>

 </div>
</div>
<!-- #content -->

<footer id="footer">
<div class="container">
<div class="columns fourteen">
<div class="alignleft copyright">
&copy; <?php _e(date('Y')); ?> الحقوق محفوظة <strong><a href="http://wikilogians.org/">لويكيلوجيا</a></strong>. المحتوى متاح تحت رخصة<br/><a href="http://creativecommons.org/licenses/by/3.0/">المشاع الإبداعي مع الحفاظ على النسبة CC-BY 3.0 Unported.</a>
</div>
<div class="alignright footer-social-links">
<ul>
<li>
<span>Find us on Facebook</span><iframe src="https://www.facebook.com/plugins/like.php?locale=en_US&href=https%3A%2F%2Fwww.facebook.com%2FWikilogia&amp;width=135&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=220486041461326" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:135px; height:21px;" allowTransparency="true"></iframe>
</li>
<li>
<iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=wikilogia&show_screen_name=true&show_count=true&lang=en" style="width:300px; height:20px;"></iframe>
</li>
</ul>
</div>
</div>

<div class="columns two footer-right">
<div id="btn-top-wrapper">
<a href="javascript:pageScroll('.top');" class="btn-top"><?php _e('Goto Top', 'sampression'); ?></a>
</div>
</div>

</div>
</footer>

<?php 
	   	/** sampression_footer hook **/
	   	do_action( 'sampression_footer' );
	   ?>	
  
<?php wp_footer(); ?>
</body>
</html>