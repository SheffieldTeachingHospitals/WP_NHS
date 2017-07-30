<?php
/////////////////
//
// Quote card
// 
// Quote, Person, Style
// 
// Namespace: qc_
// 
/////////////////
$is_published = get_sub_field( 'qc_published' );
if( $is_published ): ?>
<blockquote>
  <?php the_sub_field( 'qc_body' );?>
  <footer>
    <?php the_sub_field( 'qc_source' );?>
  </footer>
</blockquote>
<?php endif; ?>