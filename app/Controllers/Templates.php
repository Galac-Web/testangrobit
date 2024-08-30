<?php

namespace Controllers;

class Templates
{
    protected $contentFile;

    public function __construct($contentFile)
    {
        $this->contentFile = $contentFile;
    }
    public function rederLogin()
    {
        echo '<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Home | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
            name="description"
            content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="phoenixcoded" />
    ';
        $this->includeStaticElementsHeads();
        echo '

</head>
  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>

';

        if (file_exists($this->contentFile)) {
            require_once $this->contentFile;
        } else {
            echo '<p>Content not found.</p>';
        }

        $this->includeStaticFooter();

        echo '
</body>
</html>';
    }


    public function render()
    {
        echo '<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Home | Light Able Admin & Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
            name="description"
            content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="phoenixcoded" />
    ';
        $this->includeStaticElementsHeads();
        echo '
<style>
.pc-header{
left: 0 !important;
}
.bg_home{
background-image: url(175.jpg);
    background-size: cover;
    top: 0;
    height: 100vh;
    background-position: center;
        display: flex;
    justify-content: center;
    align-items: center;
}

.cl-white{
color: white;
}

.bloc_whait{

    padding: 40px;
    border-radius: 5px;
    text-align: center;
}
.color_text{
    color: white;
    max-width: 649px;
    text-align: center;
    margin: 0 auto;
    font-size: 15px;

}
.text_header{
    font-size: 76px;
}
</style>
</head>
  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>

';

        $this->includeStaticElements();

        if (file_exists($this->contentFile)) {
            require_once $this->contentFile;
        } else {
            echo '<p>Content not found.</p>';
        }

        $this->includeStaticFooter();

        echo '
</body>
</html>';
    }
    protected function includeStaticElementsHeads()
    {
        require_once './thema/static_elements/heade.php';
    }
    protected function includeStaticElements()
    {
        require_once './thema/static_elements/nav_top.php';
        require_once './thema/static_elements/left_nav.php';
    }

    protected function includeStaticFooter()
    {
        require_once './thema/static_elements/footer.php';
    }
}