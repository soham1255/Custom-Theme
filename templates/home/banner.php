<?php
/**
 * Homepage banner section
 */
extract($args);
?>

<section class="en__banner">
    <div class="container">
        <div class="row align-center">
            <div class="col col-4">
                <div data-aos="fade-right" data-aos-duration="1000" class="infobox">
                    <h1 class="title"><?php echo $heading; ?></h1>
                    <p><?php echo $sub_heading; ?></p>
                    <a href="<?php echo $button_link; ?>" class="btn-startd"><img src="<?php echo $button_icon['url']; ?>" width="16" height="16" alt="user"><?php echo $button_text; ?></a>
                </div>
            </div>
            <div class="col col-8">
                <div data-aos="zoom-in" data-aos-duration="1500" class="beforeafterslide">
                    <div id="before-after-slider">
                        <div id="before-image">
                            <img src="<?php echo $before_image['url']; ?>" alt="before" />
                        </div>
                        <span class="befraftr before-text"><?php _e('Before','enhanz');?></span>
                        <span class="befraftr after-text"><?php _e('After','enhanz');?></span>

                        <div id="after-image">
                            <img src="<?php echo $after_image['url']; ?>" alt="After" />
                        </div>
                        <div id="resizer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
