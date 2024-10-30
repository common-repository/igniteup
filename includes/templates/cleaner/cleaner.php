<?php global $the_cs_template_options; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo esc_html(!empty($the_cs_template_options["general_cs_page_title"]) ? $the_cs_template_options["general_cs_page_title"] : 'Almost Ready to Launch | ' . get_bloginfo('name')); ?></title>
    <meta charset="UTF-8">
    <?php igniteup_head(); ?>

</head>

<body>
    <div class="flex-container">
        <?php $ftd_img = empty($featured) ? false : true; ?>
        <?php $featured = $the_cs_template_options['featured'];
        if (!empty($featured)) : ?>
            <div class="flex-item img-container">
                <img src="<?php echo esc_url($featured); ?>">
            </div>
        <?php endif;  ?>

        <div class="flex-item text-container">
            <?php $logo = $the_cs_template_options['logo'];
            if (!empty($logo)) :
                echo '<img src="' . esc_url($logo) . '">';
            endif;
            ?>
            <h1><?php echo wp_kses_post($the_cs_template_options['main_title']); ?></h1>
            <h2><?php echo wp_kses_post($the_cs_template_options['secondary_title']); ?></h2>
            <p><?php echo wp_kses_post($the_cs_template_options['paragraph_title']); ?></p>
            <div class="subscribe-section subscribe-form">
                <input type="text" name="email_address" id="cs_email" placeholder="Type your email address">
                <?php $subscribebtn_text = CSAdminOptions::getDefaultStrings('subscribe_text'); ?>
                <input type="button" id="ign-subscribe-btn" value="<?php echo esc_attr($subscribebtn_text); ?>">
            </div>
            <div id="ign-notifications">
                <div class="thankyou"><?php echo wp_kses_post(CSAdminOptions::getDefaultStrings('alert_thankyou')); ?></div>
                <div id="error-msg-text"></div>
            </div>
            <div class="social-connect">
                <?php
                foreach ($the_cs_template_options['social_icon_map'] as $key => $item) :
                    if (empty($the_cs_template_options[$key]))
                        continue;
                    echo '<a href="' . esc_url($the_cs_template_options[$key]) . '" target="_blank"><span class="fab fa-' . esc_attr($item) . '"></span></a>';
                endforeach; ?>
            </div>
            <?php
            $powered_by = $the_cs_template_options['general_powered_by'];
            if ($powered_by == 1) :
            ?>
                <div id="powered-by">
                    Powered by <a href="https://wordpress.org/plugins/igniteup/" target="_blank">IgniteUp</a>
                </div>
            <?php
            endif;
            ?>

        </div>
    </div>
    <?php igniteup_footer(); ?>
</body>

</html>