<?
$cont_mony = new UserController();
$mony_token = $cont_mony->system_status();

?>
<header class="pc-header" style="background: none !important;">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->

        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">


                <li class="dropdown pc-h-item">
                    <div style="font-size: 17px;"><span class="pc-micon" style="position: absolute;margin-left: -30px;margin-top: -4px;font-size: 26px;color: #45caa9;">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
            </span> <?=$mony_token['token'];?> </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                            class="pc-head-link dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown"
                            href="layout-big-compact.html#"
                            role="button"
                            aria-haspopup="false"
                            aria-expanded="false"
                    >
                        <i class="ph-duotone ph-bell"></i>
                        <span class="badge bg-success pc-h-badge">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Notifications</h5>
                            <ul class="list-inline ms-auto mb-0">
                                <li class="list-inline-item">
                                    <a href="../application/mail.html" class="avtar avtar-s btn-link-hover-primary">
                                        <i class="ti ti-link f-18"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a
                            class="pc-head-link  arrow-none me-0"
                         
                            href="/profile"
                    >
                        <img src="./thema/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
                    </a>

                </li>
            </ul>
        </div>
    </div>
</header>