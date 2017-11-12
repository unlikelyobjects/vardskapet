<?php

if( have_rows('layout') ):
while ( have_rows('layout') ) : the_row();
    if( get_row_layout() == 'full_width' ): ?>
        <div class="grid-holder">
            <div class="grid-col-100 white-bg">
                <?php if(have_rows('content_blocks')):?>
                <?php while ( have_rows('content_blocks') ) : the_row();?>
                <?php if(get_row_layout() == 'expandable'): ?>
                    <div class="expandable">
                        <div class="entry">
                            <div class="entry-title colored"><?php echo get_sub_field('title');?></div>
                            <div class="entry-expanded">
                                <?php if(have_rows('expandable_blocks')): ?>
                                <?php while(have_rows('expandable_blocks')): the_row(); ?>
                                    <?php if(get_row_layout() == 'two_column_label'): ?>
                                        <div class="row-title colored"><?php echo get_sub_field('label_text');?></div>
                                        <div class="row-text">
                                            <?php echo get_sub_field('column_text');?>
                                            <?php if(have_rows('buttons')): ?>
                                                <div class="button-row">
                                                <?php while(have_rows('buttons')): the_row(); ?>
                                                    <div class="button colored">
                                                        <a href="<?php echo get_sub_field('button_link');?>"><?php echo get_sub_field('button_text');?></a>
                                                    </div>
                                                <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(get_row_layout() == 'book'): ?>
                                        <div class="language">
                                            <span class="colored"><?php _e('[:en]Language: [:sv]Språk: ');?>
                                                <?php if(get_sub_field('language') == 'english'): ?>
                                                    <?php _e('[:en]English[:sv]Engelska'); ?>
                                                <?php else: ?>
                                                    <?php _e('[:en]Swedish[:sv]Svenska'); ?>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        <div class="textblock">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php    
    elseif( get_row_layout() == 'slider' ):
    endif;
endwhile;
else :
    // no layouts found
endif;

?>