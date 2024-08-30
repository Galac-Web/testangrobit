<?php
$home = '';
$user = '';
$prdocut = ''; // Исправлено с prdocut на product
$partner = '';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $host ;
if($GLOBALS['link'] == $currentUrl.'/users'){
    $user = 'active';
}
if($GLOBALS['link'] == $currentUrl.'/'){
    $home = 'active';
}

?>
<nav class="pc-sidebar" >
    <div class="navbar-wrapper">

        <div class="navbar-content">
            <ul class="pc-navbar" style="justify-content: center">

                <li class="pc-item pc-caption" id="home">
                    <label>Home</label>
                    <i class="ph-duotone ph-gauge"></i>
                </li>

                <li class="pc-item pc-caption" id="ecommerce">
                    <label>E-commerce</label>
                    <i class="ph-duotone ph-shopping-cart"></i>
                </li>
                <li class="pc-item pc-caption" id="info">
                    <label>WebSait</label>
                    <i class="ph-duotone ph-gear-six"></i>
                </li>
                <li class="pc-item pc-caption" id="info">
                    <label>AppMobile</label>
                    <i class="ph-duotone ph-gear-six"></i>
                </li>
                <li class="pc-item pc-caption" id="info">
                    <label>API</label>
                    <i class="ph-duotone ph-gear-six"></i>
                </li>
                <li class="pc-item pc-caption" id="info">
                    <label>Info</label>
                    <i class="ph-duotone ph-gear-six"></i>
                </li>



            </ul>

        </div>
      
    </div>
</nav>