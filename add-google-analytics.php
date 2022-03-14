<?php
/*
Plugin Name: Add Google Analytics
Plugin URI: https://github.com/wpdevtechsupport/add-google-analytics
Description: Plugin will add Google Analytics script to your WordPress Website
Version: 1.0.0
Author: Funke Adebisi
Author URI:https://adebisifunke.github.io/funkeadebisi.github.io/
License: GNU General Public License v2 or later
Add Google Analytics script to your WordPress Website
*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
// replace your-member-id-here with your google analytics MEMBER ID
add_action("wp_footer", 'add_google_analytics');
function add_google_analytics()
{ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=your-member-id-here"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'your-member-id-here');
</script>
<?php
}
