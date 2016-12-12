</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="fa fa-angle-up"></div>

<?php
if (isset($scripts)) {
    $lambda = function() use ($scripts) {
        $type = is_array($scripts);

        switch ($type) {
            case true:
                foreach ($scripts as $each) {
                    echo '<script type="text/javascript" src="' . site_url($each) . '"></script>' . "\n";
                }
                break;
            case false:
                echo '<script type="text/javascript" src="' . site_url($scripts) . '"></script>' . "\n";
                break;
        }
    };

    $lambda();
}
?>
</body>
</html>