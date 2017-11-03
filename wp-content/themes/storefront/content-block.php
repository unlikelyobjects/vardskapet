<?php

if( have_rows('layout') ):
while ( have_rows('layout') ) : the_row();
    if( get_row_layout() == 'full_width' ): ?>
        <div class="grid-holder">
            <div class="grid-col-100 white-bg">
                <?php if(have_rows('expandable')):?>
                <?php while ( have_rows('expandable') ) : the_row();?>
                    <h1><?php echo get_sub_field('title');?></h1>
                    <div class="expandable">
                        <?php if(have_rows('entry')): ?>
                        <?php while(have_rows('entry')): the_row(); ?>
                            <div class="entry">
                                <div class="entry-title"><?php echo get_sub_field('entry_title');?></div>
                                <div class="entry-expanded">
                                    <?php while(have_rows('rows')): the_row(); ?>
                                        <div class="row-title"><?php echo   get_sub_field('row_title');?></div>
                                        <div class="row-text">
                                            <?php echo get_sub_field('row_text');?>
                                            <?php if(have_rows('buttons')): ?>
                                            <div class="button-row">
                                            <?php while(have_rows('buttons')): the_row(); ?>
                                                <div class="button">
                                                    <a href="<?php echo get_sub_field('button_link');?>"><?php echo get_sub_field('button_text');?></a>
                                                </div>
                                            <?php endwhile; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
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