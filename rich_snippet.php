<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Review",
    "itemReviewed": {
        "@type": "Thing",
        "name": "<?php the_title(); ?>"
    },
    "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5",
        "worstRating": "1"
    },
    "name": "<?php the_title(); ?> Review",
    "author": {
        "@type": "Person",
        "name": "<?php echo get_the_author_meta('display_name'); ?>"
    },
    "reviewBody": "<?php echo get_bloginfo( 'description' ); ?>",
    "publisher": {
        "@type": "Organization",
        "name": "<?php echo get_bloginfo( 'name' ); ?>"
    }
}</script>
