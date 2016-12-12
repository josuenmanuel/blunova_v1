<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

    <?php
    if (isset($styles)) {
        $lambda = function() use ($styles) {
            $type = is_array($styles);

            switch ($type) {
                case true:
                    foreach ($styles as $each) {
                        echo '<link rel="stylesheet" href="' . site_url($each) . '" type="text/css" /> ' . "\n";
                    }
                    break;
                case false:
                    echo '<link rel="stylesheet" href="' . site_url($styles) . '" type="text/css" />' . "\n";
                    break;
            }
        };

        $lambda();
    }
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Document Titles
    ============================================= -->
    <title>Blunova Dog Show</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">