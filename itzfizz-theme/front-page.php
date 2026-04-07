<?php

get_header();
$headline = get_theme_mod( 'itzfizz_headline', 'W E L C O M E' );
$brand    = get_theme_mod( 'itzfizz_brand',    'I T Z F I Z Z' );
$tagline  = get_theme_mod( 'itzfizz_tagline',  'Performance · Digital · Motion' );
$stats    = itzfizz_get_stats();
$below    = get_theme_mod( 'itzfizz_below_text', 'ITZFIZZ transforms how people move — blending performance engineering with digital-first thinking. Every metric above represents a real person choosing speed, convenience, and clarity.' );
?>

<div id="sc">
  <section id="hero" aria-label="<?php esc_attr_e( 'Hero Section', 'itzfizz-hero' ); ?>">

    <div class="ambient" aria-hidden="true"></div>
    <div class="grid"    aria-hidden="true"></div>
    <div class="vl" style="left:25%" aria-hidden="true"></div>
    <div class="vl" style="left:75%" aria-hidden="true"></div>

   
    <nav id="nav" class="navbar" aria-label="<?php esc_attr_e( 'Primary Navigation', 'itzfizz-hero' ); ?>">
      <div class="container-fluid px-0">
        <span class="nav-logo"><?php bloginfo('name'); ?></span>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav-links',
            'fallback_cb'    => function() {
                echo '<ul class="nav-links">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Work</a></li>
                  <li><a href="#">Lab</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>';
            },
        ]);
        ?>
        <span class="nav-tag">Est. 2022</span>
      </div>
    </nav>

  
    <h1 id="headline" aria-label="<?php echo esc_attr( strip_tags($headline) . ' ' . strip_tags($brand) ); ?>">
      <?php echo esc_html( $headline ); ?>
      <span class="brand"><?php echo esc_html( $brand ); ?></span>
      <span class="sub-label"><?php echo esc_html( $tagline ); ?></span>
    </h1>

    <div id="car">
      <svg viewBox="0 0 280 520" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="McLaren 720S top view">
        <ellipse cx="140" cy="415" rx="88" ry="24" fill="rgba(0,0,0,0.5)"/>
        <path d="M140 14 C113 14 88 32 75 58 L53 130 C44 160 40 204 40 248 C40 302 45 346 56 380 L74 432 C85 458 108 478 140 478 C172 478 195 458 206 432 L224 380 C235 346 240 302 240 248 C240 204 236 160 227 130 L205 58 C192 32 167 14 140 14Z" fill="#161616" stroke="#252525" stroke-width="1.5"/>
        <line x1="140" y1="22" x2="140" y2="474" stroke="#c8f560" stroke-width=".4" opacity=".1" stroke-dasharray="8 12"/>
        <path d="M90 90 C105 82 125 78 140 78 C155 78 175 82 190 90" stroke="#c8f560" stroke-width=".6" opacity=".2" fill="none"/>
        <rect x="78" y="88" width="24" height="7" rx="3.5" fill="#0a0a0a" stroke="#c8f560" stroke-width=".6" opacity=".65"/>
        <rect x="80" y="100" width="18" height="5" rx="2.5" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".4"/>
        <rect x="178" y="88" width="24" height="7" rx="3.5" fill="#0a0a0a" stroke="#c8f560" stroke-width=".6" opacity=".65"/>
        <rect x="182" y="100" width="18" height="5" rx="2.5" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".4"/>
        <path d="M102 118 C114 107 130 103 140 103 C150 103 166 107 178 118 L184 168 C174 160 158 155 140 155 C122 155 106 160 96 168Z" fill="#0a1a0a" stroke="#c8f560" stroke-width=".9" opacity=".85"/>
        <rect x="97" y="172" width="86" height="110" rx="10" fill="#0a1a0a" stroke="#c8f560" stroke-width=".5" opacity=".5"/>
        <rect x="101" y="184" width="34" height="80" rx="7" fill="#121212" stroke="#222" stroke-width="1"/>
        <rect x="145" y="184" width="34" height="80" rx="7" fill="#121212" stroke="#222" stroke-width="1"/>
        <rect x="104" y="184" width="28" height="18" rx="5" fill="#1a1a1a" stroke="#2a2a2a" stroke-width="1"/>
        <rect x="148" y="184" width="28" height="18" rx="5" fill="#1a1a1a" stroke="#2a2a2a" stroke-width="1"/>
        <circle cx="118" cy="218" r="12" fill="none" stroke="#c8f560" stroke-width="1.5" opacity=".55"/>
        <circle cx="118" cy="218" r="3" fill="#c8f560" opacity=".3"/>
        <line x1="118" y1="206" x2="118" y2="218" stroke="#c8f560" stroke-width="1.2" opacity=".55"/>
        <line x1="106" y1="218" x2="118" y2="218" stroke="#c8f560" stroke-width="1.2" opacity=".55"/>
        <path d="M102 286 C114 297 130 302 140 302 C150 302 166 297 178 286 L184 330 C174 339 158 346 140 346 C122 346 106 339 96 330Z" fill="#0a1a0a" stroke="#c8f560" stroke-width=".9" opacity=".85"/>
        <rect x="94" y="426" width="92" height="20" rx="2" fill="#0d0d0d" stroke="#c8f560" stroke-width=".5" opacity=".55"/>
        <line x1="109" y1="426" x2="109" y2="446" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <line x1="124" y1="426" x2="124" y2="446" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <line x1="140" y1="426" x2="140" y2="446" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <line x1="156" y1="426" x2="156" y2="446" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <line x1="171" y1="426" x2="171" y2="446" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <rect x="92" y="56" width="96" height="12" rx="2" fill="#0d0d0d" stroke="#c8f560" stroke-width=".5" opacity=".55"/>
        <path d="M75 65 L94 60 L94 76 L75 80Z" fill="#c8f560"/>
        <path d="M79 68 L91 64 L91 74 L79 77Z" fill="white" opacity=".35"/>
        <path d="M205 65 L186 60 L186 76 L205 80Z" fill="#c8f560"/>
        <path d="M201 68 L189 64 L189 74 L201 77Z" fill="white" opacity=".35"/>
        <line x1="76" y1="84" x2="92" y2="82" stroke="#c8f560" stroke-width="1.5" opacity=".5"/>
        <line x1="204" y1="84" x2="188" y2="82" stroke="#c8f560" stroke-width="1.5" opacity=".5"/>
        <path d="M73 426 L92 421 L92 437 L73 441Z" fill="#ff3d2e"/>
        <path d="M77 428 L89 424 L89 434 L77 438Z" fill="white" opacity=".25"/>
        <path d="M207 426 L188 421 L188 437 L207 441Z" fill="#ff3d2e"/>
        <path d="M203 428 L191 424 L191 434 L203 438Z" fill="white" opacity=".25"/>
        <line x1="74" y1="444" x2="90" y2="441" stroke="#ff3d2e" stroke-width="1.5" opacity=".5"/>
        <line x1="206" y1="444" x2="190" y2="441" stroke="#ff3d2e" stroke-width="1.5" opacity=".5"/>
        <ellipse cx="60"  cy="170" rx="28" ry="34" fill="#141414" stroke="#252525" stroke-width="1.5"/>
        <ellipse cx="60"  cy="170" rx="20" ry="25" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <ellipse cx="60"  cy="170" rx="7"  ry="7"  fill="#1a1a1a" stroke="#c8f560" stroke-width="1"  opacity=".6"/>
        <line x1="60" y1="145" x2="60" y2="195" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="35" y1="170" x2="85" y2="170" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="42" y1="152" x2="78" y2="188" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="78" y1="152" x2="42" y2="188" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <ellipse cx="220" cy="170" rx="28" ry="34" fill="#141414" stroke="#252525" stroke-width="1.5"/>
        <ellipse cx="220" cy="170" rx="20" ry="25" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <ellipse cx="220" cy="170" rx="7"  ry="7"  fill="#1a1a1a" stroke="#c8f560" stroke-width="1"  opacity=".6"/>
        <line x1="220" y1="145" x2="220" y2="195" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="195" y1="170" x2="245" y2="170" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="202" y1="152" x2="238" y2="188" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="238" y1="152" x2="202" y2="188" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <ellipse cx="60"  cy="350" rx="28" ry="34" fill="#141414" stroke="#252525" stroke-width="1.5"/>
        <ellipse cx="60"  cy="350" rx="20" ry="25" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <ellipse cx="60"  cy="350" rx="7"  ry="7"  fill="#1a1a1a" stroke="#c8f560" stroke-width="1"  opacity=".6"/>
        <line x1="60" y1="325" x2="60" y2="375" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="35" y1="350" x2="85" y2="350" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="42" y1="332" x2="78" y2="368" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="78" y1="332" x2="42" y2="368" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <ellipse cx="220" cy="350" rx="28" ry="34" fill="#141414" stroke="#252525" stroke-width="1.5"/>
        <ellipse cx="220" cy="350" rx="20" ry="25" fill="#0a0a0a" stroke="#c8f560" stroke-width=".5" opacity=".35"/>
        <ellipse cx="220" cy="350" rx="7"  ry="7"  fill="#1a1a1a" stroke="#c8f560" stroke-width="1"  opacity=".6"/>
        <line x1="220" y1="325" x2="220" y2="375" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="195" y1="350" x2="245" y2="350" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="202" y1="332" x2="238" y2="368" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <line x1="238" y1="332" x2="202" y2="368" stroke="#c8f560" stroke-width=".6" opacity=".25"/>
        <path d="M82 175 C77 218 75 265 77 320" stroke="#c8f560" stroke-width=".5" opacity=".1" fill="none"/>
        <path d="M198 175 C203 218 205 265 203 320" stroke="#c8f560" stroke-width=".5" opacity=".1" fill="none"/>
      </svg>
      <div id="car-glow"></div>
    </div>

  
    <svg id="beams" viewBox="0 0 300 520" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <defs>
        <linearGradient id="bl" x1="0" y1="1" x2="0" y2="0">
          <stop offset="0%" stop-color="#c8f560" stop-opacity="0"/>
          <stop offset="100%" stop-color="#c8f560" stop-opacity=".18"/>
        </linearGradient>
      </defs>
      <polygon points="27,72 0,0 60,0" fill="url(#bl)"/>
      <polygon points="273,72 240,0 300,0" fill="url(#bl)"/>
    </svg>


    <div id="stats" role="list" aria-label="Impact metrics">
      <?php foreach ( $stats as $stat ) : ?>
        <div class="sc" role="listitem">
          <div class="sn"><?php echo esc_html( $stat['num'] ); ?></div>
          <div class="sl"><?php echo esc_html( $stat['label'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>

    <span class="ctag tl">McLaren 720S</span>
    <span class="ctag tr">Top View — 2022</span>
    <span class="ctag bl">0–100 km/h in 2.9s</span>
    <span class="ctag br" id="ctag-br">Scroll to reveal</span>


    <div id="ticker" aria-hidden="true">
      <div class="ticker-inner">
        <?php for ( $i = 0; $i < 3; $i++ ) : ?>
          <span>ITZFIZZ</span><span class="dot">✦</span>
          <span>Performance Driven</span><span class="dot">✦</span>
          <span>Digital First</span><span class="dot">✦</span>
          <span>McLaren 720S</span><span class="dot">✦</span>
        <?php endfor; ?>
      </div>
    </div>


    <div id="scue" aria-hidden="true">
      <span><?php esc_html_e( 'Scroll', 'itzfizz-hero' ); ?></span>
      <div class="sline"></div>
    </div>

  </section>
</div>


<section id="below">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-7">
        <div class="bline"></div>
        <h2 class="bh">BEYOND<br/><span><?php esc_html_e( 'THE FOLD', 'itzfizz-hero' ); ?></span></h2>
        <p class="bb"><?php echo esc_html( $below ); ?></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
