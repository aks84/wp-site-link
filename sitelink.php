<?php
   /*
   Plugin Name: Site Link
   Plugin URI: http://tubemint.com/site-link
   description: Adds site links to wordpress site homepage
   Version: 1.0
   Author: Amulya Shahi
   Author URI: https://tubemint.com
   License: GPL2
   */


   function addSiteLink()
   {
      if (is_home) {
         ?>

         <script type="application/ld+json">
           {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "http://tubemint.com/",
            "potentialAction": {
            "@type": "SearchAction",
            "target": "http://tubemint.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
         }
      }
   </script>

   <?php 

}
}


add_action( 'wp_head', 'addSiteLink',2);

