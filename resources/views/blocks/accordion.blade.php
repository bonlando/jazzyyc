{{--
  Title: Accordion
  Description: Accodion repeater field
  Category: formatting
  Icon: table-row-after
  Keywords: collapseable, accordion
--}}

<?php if( have_rows('accordion') ): ?>
<div class="accordion" id="accordion">
    <?php $i = 0; ; while( have_rows('accordion') ): the_row(); 
    $header = get_sub_field('header');
    $content = get_sub_field('accordion_body');
    $i++; $tCount = $i;
  ?>
  <div class="card mb-3">
    <div class="card-header p-0" id="heading<?php echo $tCount; ?>">
      
      <a class="p-3 d-block w-100 cursor-pointer" data-toggle="collapse" data-target="#collapse<?php echo $tCount; ?>" aria-expanded="false" aria-controls="collapse<?php echo $tCount; ?>"><h3 class="m-0"><?php echo $header; ?> <i class="fas fa-angle-down"></i></h3>
      </a>
      
    </div>
    <div id="collapse<?php echo $tCount; ?>" class="collapse hide" aria-labelledby="heading<?php echo $tCount; ?>" data-parent="#accordion">
      <div class="card-body">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>