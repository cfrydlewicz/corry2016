	<footer class="fat-footer u-container wire-outline">
		<div class="u-inner shadowed u-flex-parent u-flex-parent--row-wrap u-flex-parent--space-between wire-outline">

			<section class="wireframe-toggle-container footer-section-container u-flex--grow1 wire-outline" id="anchor-wireframe-toggle">
				<h3>Want to see this site in wireframe mode?</h3>
				<label class="switch-light switch-candy wireframe-mode-toggle wire-outline" onclick="">
					<input type="checkbox" />
					<strong>Wireframe Mode</strong>
					<span>
						<span class="wire-outline wire-cta">OFF</span>
						<span class="wire-outline wire-cta">ON</span>
						<a></a>
					</span>
				</label>
				<p class="f-small">This setting will revert to OFF when you change pages.</p>
			</section>

			<section class="social-container footer-section-container u-flex--grow1 wire-outline" id="anchor-social">
				<h3>Follow Me</h3>
				<ul>
					<?php if ( in_category('professional') ) : ?>
						<li class="linkedin"><a href="http://www.linkedin.com/in/corryart" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" target="_blank">LinkedIn</a></li>
						<li class="github"><a href="https://github.com/cfrydlewicz" target="_blank">GitHub</a></li>
						<li class="stackoverflow"><a href="http://stackoverflow.com/users/967727/cfrydlewicz" target="_blank">StackOverflow</a></li>
					<?php else : ?>
					  <li class="facebook"><a href="http://www.facebook.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" target="_blank">Facebook</a></li>
					  <li class="spotify"><a href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" target="_blank">My Latest Stuff Spotify Playlist</a></li>
					<?php endif; ?>
				  <li class="twitter"><a href="http://www.twitter.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" target="_blank">Twitter</a></li>
				  <li class="googleplus"><a href="https://plus.google.com/u/0/103048907259001918186/about/p/pub" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://plus.google.com']);" target="_blank">Google+</a></li>
				</ul>
			</section>

			<section class="contact-container footer-section-container u-flex--grow1 wire-outline" id="anchor-contact">
				<?php if ( in_category('professional') ) : ?>
					<div class="contact-work">
						<h3>About Corry</h3>
						<p>Like Madonna, I only use my first name on my site. Not only because of my massive ego, but also because Frydlewicz is a logo challenge I find myself unprepared for.</p>
						<p>I am currently <span class="availability availability--none c-grey">unavailable</span> for full-time or freelance work.</p>
						<p><a href="/about/">Read more about Corry</a></p>
					</div>
				<?php else : ?>
					<div class="contact-personal">
						<h3>Game With Me</h3>
						<ul>
							<li class="lol">
								<strong>League of Legends:</strong> <a href="http://www.lolking.net/summoner/na/20187867" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" target="_blank" title="League of Legends">Ultros</a>
							</li>
							<li class="steam">
								<strong>Steam:</strong> <a href="http://steamcommunity.com/id/cfrydlewicz/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" target="_blank" title="Steam">handbanana_51</a>
							</li>
							<li class="mtgo">
								<strong>Magic Online:</strong> <a href="http://community.wizards.com/users/propagandist" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://community.wizards.com']);" target="_blank" title="Magic: The Gathering Online">Propagandist</a>
							</li>
							<li class="psn">
								<strong>PSN:</strong> <a href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" target="_blank" title="PSN">Hand_Banana51</a>
							</li>
							<li class="xbl">
								<strong>Xbox Live:</strong> <a href="http://www.xboxgamertag.com/search/viciouslobo/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" target="_blank" title="Xbox Live">ViciousLobo</a>
							</li>
							<li class="blizzard">
								<strong>Battle.net:</strong> <a href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" target="_blank" title="Battle.net">Ultros#1809</a>
							</li>
						</ul>
					</div>
				<?php endif; ?>
			</section>

		</div>
	</footer>

	<footer class="copyright-footer u-container wire-outline">
		<div class="u-inner shadowed wire-outline">
			<p class="copyright f-smallest">&copy;2006-<span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a href="mailto:cfrydlewicz@gmail.com" target="_blank"><span itemprop="copyrightHolder">Corry Frydlewicz</span></a></p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</div><!-- /.scan-lines -->
</div><!-- /.total-wrapper -->
</body></html>