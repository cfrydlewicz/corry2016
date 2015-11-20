<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic|Oxygen:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/scripts.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="total-wrapper">
  <header class="container">
    <div class="bg-container">
      <div class="bg-inner"></div>
      <div class="inner">
        <div class="header-logo">
          <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 251 103" enable-background="new 0 0 251 103" xml:space="preserve"><g><path class="corry-c" d="M28.3 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.8c0-7.5 2.7-14 8-19.3 c5.3-5.3 11.8-7.9 19.3-7.9c7.6 0 14 2.7 19.3 8c5.1 5.1 7.7 11.1 8 18.2c-4 0-8.8 0-12.8 0c-0.2-3.5-1.6-6.6-4.2-9.2 c-2.8-2.8-6.2-4.2-10.3-4.2c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.2v12.8c0 4 1.4 7.4 4.2 10.2c2.8 2.8 6.2 4.2 10.3 4.2 c4 0 7.4-1.5 10.3-4.4c2.5-2.6 3.9-5.8 4.2-9.6c2.9 0 10.1 0 12.8 0c-0.3 7.4-2.9 13.6-7.9 18.7C42.3 66.1 35.9 68.8 28.3 68.8z" /><path class="corry-o" d="M88.9 68.8c-7.6 0-14-2.7-19.3-7.9c-5.3-5.3-8-11.7-8-19.3V28.5c0-7.4 2.7-13.8 8-19.1 C74.9 4 81.3 1.3 88.9 1.3c7.6 0 14 2.7 19.3 8.1c5.3 5.4 8 11.8 8 19.1v13.1c0 7.6-2.7 14-8 19.3C102.9 66.2 96.4 68.8 88.9 68.8z M103.4 28.5c0-3.8-1.4-7.2-4.2-10.1c-2.8-2.9-6.2-4.3-10.3-4.3c-4 0-7.5 1.4-10.3 4.3c-2.8 2.9-4.2 6.3-4.2 10.1v13.1 c0 3.8 1.4 7.2 4.2 10.1c2.8 2.9 6.2 4.3 10.3 4.3c4 0 7.4-1.4 10.3-4.3c2.8-2.9 4.2-6.3 4.2-10.1V28.5z" /><path class="corry-r1" d="M149.5 14.1c-4 0-7.5 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.7-8.1 19.3-8.1h9.2v12.8H149.5z"/><path class="corry-r2" d="M186.8 14.1c-4 0-7.4 1.4-10.3 4.2c-2.8 2.8-4.2 6.2-4.2 10.3v40.2h-12.8V28.8c0-7.5 2.7-14 8-19.4 c5.3-5.4 11.8-8.1 19.3-8.1h9.2v12.8H186.8z"/><path class="corry-y" d="M250.3 74.9c0 7.6-2.7 14-8.2 19.3c-5.5 5.3-12.2 8-20.3 8V89.4c4.5 0 8.3-1.4 11.2-4.3 c3-2.8 4.5-6.3 4.5-10.4v-6h-8.7c-7.6 0-14-2.7-19.3-8.1c-5.3-5.4-8-11.8-8-19.2V1.3h12.8v40.5c0 3.9 1.4 7.2 4.2 10 c2.8 2.8 6.2 4.2 10.3 4.2h8.7V1.3h12.8V74.9z"/></g></svg>
            <img src="<?php bloginfo('template_url');?>/images/logo-header.png" />
          </a>
        </div>
        <div class="subsection-logo"></div>
        <div class="search-container closed"><?php get_search_form(); ?></div>
        <div class="menu-container"><span class="menu-text">Menu</span><div class="inner-menu">
          <?php wp_nav_menu(); ?>
          <?php if ( !is_page( 2638 )  ) : // if not home page ?>
          <div class="secondary-menu-container">
            <ul>
              <li><h4>Other Links</h4>
                <ul>
                  <li class="about"><a href="/">Home</a></li>
                <?php if ( !is_page( 640 )  ) : // if not about page ?>
                  <li class="about"><a href="/about/">About Corry</a></li>
                <?php else : // if IS about page ?>
                  <li class="contact"><a href="mailto:cfrydlewicz@gmail.com" target="_blank">Email Corry</a></li>
                  <li class="resume"><a href="mailto:cfrydlewicz@gmail.com?subject=Resume Request?body=Hello Corry,%0A%0AI would like a copy of your resume for the following position:%0A%0A(Please insert a job description or a link to one. I will reply as soon as possible.)" target="_blank">Request a Resume</a></li>
                  <li class="skype"><a href="skype:cfrydlewicz?call" target="_blank">Skype</a></li>
                <?php endif; // if not about page ?>
                <?php if ( in_category('professional') ) : ?>
                  <li class="contact"><a href="mailto:cfrydlewicz@gmail.com" target="_blank">Email Corry</a></li>
                  <li class="resume"><a href="mailto:cfrydlewicz@gmail.com?subject=Resume Request?body=Hello Corry,%0A%0AI would like a copy of your resume for the following position:%0A%0A(Please insert a job description or a link to one. I will reply as soon as possible.)" target="_blank">Request a Resume</a></li>
                  <li class="skype"><a href="skype:cfrydlewicz?call" target="_blank">Skype</a></li>
                <?php endif; ?>
                </ul>
              </li>
              <?php if ( in_category('gaming') ) : ?>
              <li><h4>Play With Me</h4>
                <ul>
                  <li class="blizzard"><a href="http://us.battle.net/wow/en/character/queldorei/Ultros/simple" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.battle.net']);" target="_blank" title="Battle.net">Ultros#1809</a></li><!--.wow-->
                  <li class="steam"><a href="http://steamcommunity.com/id/cfrydlewicz/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://steamcommunity.com']);" target="_blank" title="Steam">handbanana_51</a></li><!--.steam-->
                  <li class="lol"><a href="http://www.lolking.net/summoner/na/20187867" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.lolking.net']);" target="_blank" title="League of Legends">Ultros</a></li><!--.lol-->
                  <li class="psn"><a href="https://us.playstation.com/publictrophy/?onlinename=Hand_Banana51" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://us.playstation.com']);" target="_blank" title="PSN">Hand_Banana51</a></li><!--.psn-->
                  <li class="xbl"><a href="http://www.xboxgamertag.com/search/viciouslobo/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.xboxgamertag.com']);" target="_blank" title="Xbox Live">ViciousLobo</a></li><!--.xbl-->
                  <li class="mtgo"><a href="http://community.wizards.com/users/propagandist" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://community.wizards.com']);" target="_blank" title="Magic: The Gathering Online">Propagandist</a></li><!--.mtgo-->
                  <!--li class="ffxiv"><a href="http://corryfrydlewicz.com/ffxiv-recruitment/" >Ultros Kowalski</a><br /><span>(Ultros NA)</span></li><!--.ffxiv-->
                  <!--li class="guildwars2"><a href="<?php bloginfo('wpurl'); ?>/?p=1376">ultros.2854</a></li><!--.guildwars2-->
                </ul>
              </li>
              <?php else : ?>
              <li><h4>Follow Me</h4>
                <ul>
                <?php if ( in_category('professional') ) : ?>
                  <li class="linkedin"><a href="http://www.linkedin.com/in/corryart" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" target="_blank">LinkedIn</a></li>
                  <li class="github"><a href="https://github.com/cfrydlewicz" target="_blank">GitHub</a></li>
                  <li class="stackoverflow"><a href="http://stackoverflow.com/users/967727/cfrydlewicz" target="_blank">StackOverflow</a></li>
                <?php elseif ( in_category('personal') ) : ?>
                  <li class="facebook"><a href="http://www.facebook.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);" target="_blank">Facebook</a></li>
                  <li class="twitter"><a href="http://www.twitter.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" target="_blank">Twitter</a></li>
                  <li class="spotify"><a href="http://open.spotify.com/user/1232018881/playlist/59TxdkMRHa3DL54uXp9Y3c" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://spotify.com/']);" target="_blank">My Latest Stuff Spotify Playlist</a></li>
                <?php else : ?>
                  <li class="linkedin"><a href="http://www.linkedin.com/in/corryart" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);" target="_blank">LinkedIn</a></li>
                  <li class="twitter"><a href="http://www.twitter.com/cfrydlewicz" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.twitter.com']);" target="_blank">Twitter</a></li>
                  <li class="skype"><a href="skype:cfrydlewicz?call" target="_blank">Skype Corry</a></li>
                <?php endif; ?>
                  <li class="googleplus"><a href="https://plus.google.com/u/0/103048907259001918186/about/p/pub" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://plus.google.com']);" target="_blank">Google+</a></li>
                </ul>
              </li>
              <?php endif; // if in gaming ?>
            </ul>
            <div class="all-posts"><a href="/blog/">View All Posts</a></div>
          </div><!--.secondary-menu-container-->
          <?php endif; // if not home page ?>
        </div></div>
      </div>
    </div>
  </header>
