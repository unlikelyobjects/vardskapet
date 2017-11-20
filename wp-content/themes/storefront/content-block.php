<?php

if( have_rows('layout') ):
while ( have_rows('layout') ) : the_row();
    if( get_row_layout() == 'full_width' ): ?>
        <div class="grid-holder" id="dynamic">
            <div class="grid-col-100 white-bg">
                <?php if(have_rows('content_blocks')):?>
                <?php while ( have_rows('content_blocks') ) : the_row();?>
                <?php if(get_row_layout() == 'expandable'): ?>
                    <div class="expandable">
                        <?php
                            $isOpen = get_sub_field('open_by_default') == true ? 'active' : '';
                        ?>
                        <div class="entry <?php echo $isOpen; ?>">
                            <div class="entry-title colored col-hover"><?php echo get_sub_field('title');?></div>
                            <div class="entry-expanded">
                                <?php if(have_rows('expandable_blocks')): ?>
                                <?php while(have_rows('expandable_blocks')): the_row(); ?>
                                    <?php if(get_row_layout() == 'two_column_label'): ?>
                                        <div class="row-title colored"><?php echo get_sub_field('label_text');?></div>
                                        <article class="row-text">
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
                                        </article>
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
                                        <?php if(have_rows('buttons')): ?>
                                            <div class="button-row">
                                            <?php while(have_rows('buttons')): the_row(); ?>
                                                <div class="button colored">
                                                    <a href="<?php echo get_sub_field('button_link');?>"><?php echo get_sub_field('button_text');?></a>
                                                </div>
                                            <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(get_row_layout() == 'training_info'): ?>
                                        <div class="textblock">
                                            <?php echo get_sub_field('description'); ?>
                                        </div>
                                        <?php if(have_rows('course_facts')): ?>
                                            <div class="course-facts">
                                            <?php while(have_rows('course_facts')): the_row(); ?>
                                                <div class="course-fact">
                                                    <div class="course-fact-label colored regular">
                                                        <?php echo get_sub_field('label');?>
                                                    </div>
                                                    <div class="course-fact-information">
                                                        <?php if(get_sub_field('link') != '') :
                                                        ?>
                                                            <a href="<?php echo get_sub_field('link');?>">
                                                        <?php endif;?>
                                                        <?php echo get_sub_field('information');?>
                                                        <?php if(get_sub_field('link') != '') :
                                                        ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(get_row_layout() == 'text_block_wysiwyg'): ?>
                                        <div class="textblock"><?php echo get_sub_field('body');?></div>
                                    <?php endif; ?>
                                    <?php if(get_row_layout() == 'employee'): ?>
                                        <div class="employee">
                                            <div class="employee-image employee-col">
                                                <div class="image" style="background-image:url(<?php echo get_sub_field('image'); ?>)"></div>
                                            </div>
                                            <div class="employee-info employee-col">
                                                <div class="name colored"><?php echo get_sub_field('name'); ?></div>
                                                <div class="description"><?php echo get_sub_field('description'); ?></div>
                                                <div class="email"><span class="strong colored"><?php _e('[:en]Email:[:sv]E-post:')?></span> <a class="mail-link" href="mailto:<?php echo get_sub_field('email'); ?>"><?php echo get_sub_field('email'); ?></a></div>
                                                <div class="phone"><span class="strong colored"><?php _e('[:en]Phone:[:sv]Telefon:')?></span> <?php echo get_sub_field('phone'); ?></div>
                                                <!--<div class="movie colored" data-url="<?php echo get_sub_field('youtube_url'); ?>"><span class="ion">&#xf488;</span> <?php _e('[:en]Watch video presentation[:sv]See videopresentation') ?></div>-->
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(get_row_layout() == 'headline'): ?>
                    <h1 class="colored"><?php echo get_sub_field('headline');?></h1>
                <?php endif ?>
                <?php if(get_row_layout() == 'video'): ?>
                    <div class="video-block" data-href="<?php echo get_sub_field('youtube_url');?>" style="background-image:url(<?php echo get_sub_field('video_image') ?>)"></div>
                <?php endif ?>
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