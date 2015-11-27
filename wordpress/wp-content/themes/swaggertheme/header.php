<html>
<head>
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link href='<?php echo get_template_directory_uri()."/css/typography.css" ?>' media='screen' rel='stylesheet' type='text/css'/>
    <link href='<?php echo get_template_directory_uri()."/css/reset.css" ?>' media='screen' rel='stylesheet' type='text/css'/>
    <link href='<?php echo get_template_directory_uri()."/css/screen.css" ?>' media='screen' rel='stylesheet' type='text/css'/>
    <link href='<?php echo get_template_directory_uri()."/css/reset.css" ?>' media='print' rel='stylesheet' type='text/css'/>
    <link href='<?php echo get_template_directory_uri()."/css/print.css" ?>' media='print' rel='stylesheet' type='text/css'/>

    <script src='<?php echo get_template_directory_uri()."/lib/jquery-1.8.0.min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/jquery.slideto.min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/jquery.wiggle.min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/jquery.ba-bbq.min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/handlebars-2.0.0.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/underscore-min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/backbone-min.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/swagger-ui.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/highlight.7.3.pack.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/marked.js" ?>' type='text/javascript'></script>
    <script src='<?php echo get_template_directory_uri()."/lib/swagger-oauth.js" ?>' type='text/javascript'></script>

</head>
<body>
<body class="swagger-section">
<div id='header'>
    <div class="swagger-ui-wrap">
        <a id="logo" href="http://swagger.io"><?wp_title();?></a>

        <!--
        <form id='api_selector'>
            <div class='input'><input placeholder="http://example.com/api" id="input_baseUrl" name="baseUrl" type="text"/></div>
            <div class='input'><input placeholder="api_key" id="input_apiKey" name="apiKey" type="text"/></div>
            <div class='input'><a id="explore" href="#" data-sw-translate>Explore</a></div>
        </form>
        -->

    </div>
</div>
