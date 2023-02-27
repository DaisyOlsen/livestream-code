<?php
/**
 * Title: Contextual Site Title Element
 * Slug: underscores-blocks/contextual-site-title
 * Inserter: yes
 */
?>
<?php
	if ( is_single() ) :
?>
    <!-- wp:site-title /-->
<?php
	else :
?>
    <!-- wp:site-title {"level":0} /-->
<?php
	endif;