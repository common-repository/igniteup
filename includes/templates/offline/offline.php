<?php global $the_cs_template_options; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo esc_html( !empty($the_cs_template_options["general_cs_page_title"]) ? $the_cs_template_options["general_cs_page_title"] : 'Almost Ready to Launch | ' . get_bloginfo('name')); ?></title>

    <style>
        .main-container a {
            color: <?php echo esc_attr($the_cs_template_options['font_color']); ?> !important;
            transition: all ease 400ms;
        }

        a:hover {
            color: <?php echo esc_attr($the_cs_template_options['link_color']); ?> !important;
        }

        <?php if (!empty($the_cs_template_options['bg_image'])) : ?>body::after {
            content: '';
            background: url('<?php echo esc_attr($the_cs_template_options['bg_image']); ?>');
            opacity: 0.5;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            position: fixed;
            z-index: -1;
            background-size: cover;
        }

        body {
            background: #000 !important;
        }

        <?php endif; ?>
    </style>
    <?php igniteup_head(); ?>
</head>

<body style="background: <?php echo esc_attr($the_cs_template_options['bg_color']); ?>; color:<?php echo esc_attr($the_cs_template_options['font_color']); ?>;">
    <div class="container-fluid main-container">
        <div class="row">
            <div class="col-xs-2 visible-xs"></div>
            <div class="col-sm-12 col-xs-8">
                <img class="img-responsive logo" src="<?php echo esc_url($the_cs_template_options['logo']); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="title-top text-center">
                    <?php echo wp_kses_post($the_cs_template_options['title_top']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-sm-12">
                <div class="text-center sub-text trans">
                    <?php echo wp_kses_post($the_cs_template_options['paragraph']); ?>
                </div>
                <p class="text-center contact trans">
                    <?php echo esc_html($the_cs_template_options['contact']); ?> <a href="mailto:<?php echo esc_attr($the_cs_template_options['email']); ?>"> <?php echo esc_html($the_cs_template_options['email']); ?> </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <?php
                $powered_by = $the_cs_template_options['general_powered_by'];
                if ($powered_by == 1) {
                    $class = "visible";
                } else {
                    $class = "hidden";
                }
                ?>
                <div class="<?php echo esc_attr($class); ?> text-center" id="powered-by">
                    Powered by <a href="https://wordpress.org/plugins/igniteup/" target="_blank">IgniteUp</a>
                </div>
            </div>
        </div>
    </div>
    <?php igniteup_footer(); ?>
</body>

</html>