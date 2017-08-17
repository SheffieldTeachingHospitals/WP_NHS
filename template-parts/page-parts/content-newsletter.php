<?php
/////////////////
//
// Newsletter
// 
// 
// 
// Namespace: n_
// 
/////////////////
$is_published = get_sub_field( 'n_published' );
if( $is_published ): ?>
<section class="page-part page-part-newsletter">
  
  <?php if( get_sub_field( 'n_section_title' )): ?>
  <h2 class="subtle"><?php the_sub_field( 'n_section_title' );?></h2>
  <?php endif ;?>
  
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <?php echo wp_get_attachment_image( get_sub_field( 'n_image' ), 'full', "", array( "class" => "img-full img-spacer" ) ) ;?>
    </div>
    
    <div class="col-md-6 col-xs-12">
      <?php $n_file = get_sub_field( 'n_featured' ) ;?>
      <div class="block">
        <h3>
          <a href="<?php echo $n_file[ 'url' ] ;?>" target="_blank" title="<?php echo $n_file[ 'title' ] ;?>"><?php echo $n_file[ 'title' ] ;?></a>
        </h3>
        <p><?php echo $n_file[ 'description' ] ;?></p>
        <p><a class="btn btn-success" href="<?php echo $n_file[ 'url' ] ;?>" target="_blank" title="Download <?php echo $n_file[ 'title' ] ;?>">Download now</a></p>
      </div>
    </div>
  </div>
  
  <?php if( have_rows('n_previous_editions') ): ?>
    <h3 class="subtle">Previous editions</h3>
    <ol class="list-group list-feed-news">
    <?php while( have_rows('n_previous_editions') ): the_row();?>
      <?php $prev_file = get_sub_field( 'n_prev' );?>
      <li class="list-group-item"><a href="<?php echo $prev_file[ 'url' ] ;?>" target="_blank" title="<?php echo $prev_file[ 'title' ] ;?>"><?php echo $prev_file[ 'title' ] ;?></a></li>
    <?php endwhile; ?>
    </ol>
  <?php endif; ?>
  
</section>
<?php endif; ?>