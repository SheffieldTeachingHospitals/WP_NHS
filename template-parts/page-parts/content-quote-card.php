<?php
/////////////////
//
// Quote card
// 
// Quote, source
// 
// Namespace: qc_
// 
/////////////////
$is_published = get_sub_field( 'qc_published' );
if( $is_published ): ?>
<section class="page-part">
  <blockquote>
    <?php the_sub_field( 'qc_quote' );?>
    
    <?php if( get_sub_field( 'qc_source' ) ): ?>
    <footer>
      <?php the_sub_field( 'qc_source' );?>
    </footer>
    <?php endif; ?>
    
  </blockquote>
</section>
<?php endif; ?>