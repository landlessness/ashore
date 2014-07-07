	<div class="clear"></div>
	
	<div id="footer"><footer>
    	<div class="top">
        	<div class="container">
        		<a href="#main"><?php _e('Back to top'); ?></a>
            </div>
        </div>
        <div class="social">
        <div class="footerHead">
                <div class="container">
                    <h2>Love the Water? Follow Ashore.</h2>
                </div>
            </div>
            <div class="container">
            	<div class="block">
                	<h3 class="facebook">On Facebook</h3>
                    	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fashoredetroit%3Fref%3Dstream&amp;width=245px&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=1415630728699050" scrolling="no" frameborder="0" style="border:none; overflow:hidden; background:#FFF; width:245px; height:258px;" allowTransparency="true"></iframe>
                </div>
                <div class="socialSeparator"><!-- --></div>
                <div class="block">
                	<h3 class="twitter">On Twitter</h3>
                    <a class="twitter-timeline" href="https://twitter.com/AshoreDetroit" data-widget-id="468788298421264385">Tweets by @AshoreDetroit</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="socialSeparator"><!-- --></div>
            </div>
        </div>
        <div class="footerHead">
                <div class="container">
                    <h2>Have a Story Tip? Let Us Know.</h2>
                </div>
            </div>
            <div class="container">
            	<div class="block">
                	<h3 class=""><a href="mailto:detroit@ashore.me">detroit@ashore.me</a></h3>
              </div>
                <div class="socialSeparator"><!-- --></div>
            </div>
        </div>
        <div class="categoryNav">
        	<?php wp_nav_menu( array('theme_location' => 'category-footer-menu' )); /* editable within the Wordpress backend */ ?>
        </div>
		<div id="nav-footer" class="nav"><nav>
				<?php wp_nav_menu( array('theme_location' => 'footer-menu' )); /* editable within the Wordpress backend */ ?>
           <div class="clear"></div>
		</nav></div><!--#nav-footer-->
				<div class="clear"></div>	
        <div class="copyright">
        	<div class="container">

            <div>
              <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
                <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
              </a>
            </div>
            <div class="creative-commons-text">
              This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
            </div>
          </div>
        </div>
	</footer></div><!--#footer-->
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>



</body>
</html>