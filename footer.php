	<footer class="fat-footer u-container wire-outline">
		<div class="u-inner u-flex-parent u-flex-parent--space-between wire-outline">

			<section class="wireframe-toggle-container footer-section-container u-flex--grow1 wire-outline" id="anchor-wireframe-toggle">
				<h3>Wireframe Mode</h3>
				<label class="switch-light switch-candy wireframe-mode-toggle wire-outline" onclick="">
					<input type="checkbox" id="wireframe-toggle" />
					<span>
						<span class="wire-cta">OFF</span>
						<span class="wire-cta">ON</span>
						<a></a>
					</span>
				</label>
				<p class="f-smallest">(This setting will revert to OFF when you change pages)</p>
			</section>

			<section class="social-container footer-section-container u-flex--grow1 wire-outline" id="anchor-social">
				<h3>Follow Me</h3>
				<ul>
					<li class="linkedin"><a class="icon-linkedin" href="http://www.linkedin.com/in/corryart" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" target="_blank"><span class="u-visually-hidden">LinkedIn</span></a></li>
				  <li class="twitter"><a class="icon-twitter" href="http://www.twitter.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" target="_blank"><span class="u-visually-hidden">Twitter</span></a></li>
				  <li class="googleplus"><a class="icon-google-plus" href="https://plus.google.com/u/0/103048907259001918186/about/p/pub" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://plus.google.com']);" target="_blank"><span class="u-visually-hidden">Google+</span></a></li>
				  <li class="spotify"><a class="icon-spotify" href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" target="_blank"><span class="u-visually-hidden">My Latest Stuff Spotify Playlist</span></a></li>
					<li class="github"><a class="icon-github" href="https://github.com/cfrydlewicz" target="_blank"><span class="u-visually-hidden">GitHub</span></a></li>
					<li class="stackoverflow"><a class="icon-stackoverflow" href="http://stackoverflow.com/users/967727/cfrydlewicz" target="_blank"><span class="u-visually-hidden">StackOverflow</span></a></li>
					<?php if ( !in_category('professional') ) : ?>
						<li class="facebook"><a class="icon-facebook2" href="http://www.facebook.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" target="_blank"><span class="u-visually-hidden">Facebook</span></a></li>
						<li class="twitch"><a class="icon-twitch" href="https://www.twitch.tv/ultros_the_octopus" target="_blank"><span class="u-visually-hidden">Twitch.tv</span></a></li>
					<?php endif; ?>
				</ul>
			</section>

			<section class="contact-container footer-section-container u-flex--grow1 wire-outline" id="anchor-contact">
				<?php if ( in_category('professional') || is_page() ) : ?>
					<div class="contact-work">
						<h3>About Corry</h3>
						<p>I am currently <span class="availability availability--none">Unavailable</span> for full-time or freelance work.</p>
						<a class="button-link about-cta" href="/about/">Read more about Corry <span>⟩</span></a>
					</div>
				<?php else : ?>
					<div class="contact-personal">
						<h3>Game With Me</h3>
						<ul>
							<li class="lol">
								<span>League of Legends:</span> <a href="http://www.lolking.net/summoner/na/20187867" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" target="_blank" title="League of Legends">Ultros</a>
							</li>
							<li class="steam">
								<span>Steam:</span> <a href="http://steamcommunity.com/id/cfrydlewicz/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" target="_blank" title="Steam">handbanana_51</a>
							</li>
							<li class="blizzard">
								<span>Battle.net:</span> <a href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" target="_blank" title="Battle.net">Ultros#1809</a>
							</li>
							<li class="mtgo">
								<span>Magic Online:</span> <a href="http://community.wizards.com/users/propagandist" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://community.wizards.com']);" target="_blank" title="Magic: The Gathering Online">Propagandist</a>
							</li>
							<li class="psn">
								<span>PSN:</span> <a href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" target="_blank" title="PSN">Hand_Banana51</a>
							</li>
							<!--li class="xbl">
								<strong>Xbox Live:</strong> <a href="http://www.xboxgamertag.com/search/viciouslobo/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" target="_blank" title="Xbox Live">ViciousLobo</a>
							</li-->
						</ul>
					</div>
				<?php endif; ?>
			</section>

		</div>
	</footer>

	<footer class="copyright-footer u-container wire-outline">
		<div class="u-inner wire-outline">
			<p class="copyright f-smallest">&copy;2006-<span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a href="mailto:cfrydlewicz@gmail.com" target="_blank"><span itemprop="copyrightHolder">Corry Frydlewicz</span></a></p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</div><!-- /.scan-lines -->
</div><!-- /.total-wrapper -->
</body></html>