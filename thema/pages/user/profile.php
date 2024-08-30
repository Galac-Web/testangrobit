<?php
$userController = new UserController();
$users_datte = $userController->get_allinfo($_SESSION['user_id'],'users_info','id_users');
$return = $userController->system_status();


?>
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                            <li class="breadcrumb-item" aria-current="page">Account Profile</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Account Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-lg-5 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body position-relative">
                                <div class="text-center mt-3">
                                    <div class="chat-avtar d-inline-flex mx-auto">
                                        <img class="rounded-circle img-fluid wid-90 img-thumbnail" src="../assets/images/user/avatar-1.jpg" alt="User image">
                                        <i class="chat-badge bg-success me-2 mb-2"></i>
                                    </div>
                                    <h5 class="mb-0"><?= $users_datte[0]['fname'].' '.$users_datte[0]['lastname']; ?></h5>


                                    <div class="row g-3">
                                        <div class="col-12">
                                            <h5 class="mb-0"><?=$return['token'];?></h5>
                                            <small class="text-muted">token</small>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0" id="user-set-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab" data-bs-toggle="pill" href="account-profile.html#user-set-profile" role="tab" aria-controls="user-set-profile" aria-selected="true">
                                    <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Profile Overview</span>
                                </a>
                                <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab" data-bs-toggle="pill" href="account-profile.html#user-set-information" role="tab" aria-controls="user-set-information" aria-selected="false" tabindex="-1">
                                    <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Personal Information</span>
                                </a>

                                <a class="nav-link list-group-item list-group-item-action" id="user-set-passwort-tab" data-bs-toggle="pill" href="account-profile.html#user-set-passwort" role="tab" aria-controls="user-set-passwort" aria-selected="false" tabindex="-1">
                                    <span class="f-w-500"><i class="ph-duotone ph-key m-r-10"></i>Change Password</span>
                                </a>
                                <a class="nav-link list-group-item list-group-item-action" id="user-set-email-tab" data-bs-toggle="pill" href="account-profile.html#user-set-email" role="tab" aria-controls="user-set-email" aria-selected="false" tabindex="-1">
                                    <span class="f-w-500"><i class="ph-duotone ph-envelope-open m-r-10"></i>Email settings</span>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Personal information</h5>
                            </div>
                            <div class="card-body position-relative">
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Email</p>
                                    <p class="mb-0"><?=$users_datte[0]['email'];?></p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                    <p class="mb-0 text-muted me-1">Phone</p>
                                    <p class="mb-0"><?=$users_datte[0]['tel'];?></p>
                                </div>
                                <div class="d-inline-flex align-items-center justify-content-between w-100">
                                    <p class="mb-0 text-muted me-1">Location</p>
                                    <p class="mb-0"><?=$users_datte[0]['adress'];?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7 col-xxl-9">
                        <div class="tab-content" id="user-set-tabContent">
                            <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                                <div class="card">

                                    <div class="card-body" style="background-image: url('./myprofile.gif');height: 300px;background-size: cover;background-position: center;background-repeat: no-repeat;">


                                    </div>

                                </div>
                                <div class="row" style="
    margin-top: 47px;
">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row g-3 text-center">
                                                    <div class="col-6">
                                                        <div class="card mb-0">
                                                            <a href="/addproduct" class="card-body py-4 px-2">
                                                                <div class="avtar bg-warning rounded-circle">
                                                                    <img src="Add_apps_perspective_matte_s.svg" class="animated-img">
                                                                </div>
                                                                <h6 class="mb-0 mt-3 text-muted">ADD Product</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card mb-0">
                                                            <a href="/token" class="card-body py-4 px-2">
                                                                <div class="avtar bg-info rounded-circle">
                                                                    <img src="Bitcoin_perspective_matte_s 1.svg" class="animated-img">
                                                                </div>
                                                                <h6 class="mb-0 mt-3 text-muted">Token</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card mb-0">
                                                            <a href="#" class="card-body py-4 px-2">
                                                                <div class="avtar bg-success rounded-circle">
                                                                    <img src="Diagram_perspective_matte_s 1.svg" class="animated-img">
                                                                </div>
                                                                <h6 class="mb-0 mt-3 text-muted">Statistik</h6>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card mb-0">
                                                            <a href="#" class="card-body py-4 px-2">
                                                                <div class="avtar bg-primary rounded-circle">
                                                                    <img src="Message_perspective_matte_s 1.svg" class="animated-img">
                                                                </div>
                                                                <h6 class="mb-0 mt-3 text-muted">Suport</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <form  class="tab-pane fade" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control" name="fname" placeholder="Anshan" value="<?= $users_datte[0]['fname']?>">
                                                    <?
                                                    echo (count($users_datte) > 0) ? '<input type="text" name="type" value="edit" hidden="hidden"><input type="text" name="id" value="'.$users_datte[0]['id'].'" hidden="hidden">'  : '<input type="text" name="type" value="add" hidden="hidden">';
                                                    ?>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" name="lastname" placeholder="Handgun" value="<?= $users_datte[0]['lastname']?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Country</label>
                                                    <input type="text" class="form-control" name="countor" placeholder="New York" value="<?= $users_datte[0]['countor']?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Zip code</label>
                                                    <input type="text" class="form-control" name="zipcode" placeholder="956754" value="<?= $users_datte[0]['zipcode']?>">
                                                </div>
                                            </div>

                                        </div> 
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Contact Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Contact Phone</label>
                                                    <input type="text" class="form-control" name="tel" placeholder="(+99) 9999 999 999" value="<?= $users_datte[0]['tel']?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email" placeholder="demo@sample.com" value="<?= $users_datte[0]['email']?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-0">
                                                    <label class="form-label">Address</label>
                                                    <textarea class="form-control" name="adress"><?= $users_datte[0]['adress']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end btn-page">
                                    <button type="button" id="submit-button" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                            <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>General Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 pt-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Username <span class="text-danger">*</span></label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <input type="text" class="form-control" value="Ashoka_Tano_16">
                                                        <div class="form-text">
                                                            Your Profile URL: <a href="account-profile.html#" class="link-primary">https://pc.com/Ashoka_Tano_16</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Account Email <span class="text-danger">*</span></label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <input type="text" class="form-control" value="demo@sample.com">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Language</label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <select class="form-control">
                                                            <option>Washington</option>
                                                            <option>India</option>
                                                            <option>Africa</option>
                                                            <option>New York</option>
                                                            <option>Malaysia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Sign in Using <span class="text-danger">*</span></label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <select class="form-control">
                                                            <option>Password</option>
                                                            <option>Face Recognition</option>
                                                            <option>Thumb Impression</option>
                                                            <option>Key</option>
                                                            <option>Pin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Advance Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 pt-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="mb-1">Secure Browsing</p>
                                                        <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="mb-1">Login Notifications</p>
                                                        <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="mb-1">Login Approvals</p>
                                                        <p class="text-muted text-sm mb-0">Approvals is not required when login from unrecognized devices.</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Recognized Devices</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 pt-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avtar bg-light-primary">
                                                                <i class="ph-duotone ph-desktop f-24"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <p class="mb-1">Celt Desktop</p>
                                                                <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="text-success d-inline-block me-2">
                                                            <i class="fas fa-circle f-10 me-2"></i>
                                                            Current Active
                                                        </div>
                                                        <a href="account-profile.html#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avtar bg-light-primary">
                                                                <i class="ph-duotone ph-device-tablet-camera f-24"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <p class="mb-1">Imco Tablet</p>
                                                                <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="text-muted d-inline-block me-2">
                                                            <i class="fas fa-circle f-10 me-2"></i>
                                                            Active 5 days ago
                                                        </div>
                                                        <a href="account-profile.html#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avtar bg-light-primary">
                                                                <i class="ph-duotone ph-device-mobile-camera f-24"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <p class="mb-1">Albs Mobile</p>
                                                                <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="text-muted d-inline-block me-2">
                                                            <i class="fas fa-circle f-10 me-2"></i>
                                                            Active 1 month ago
                                                        </div>
                                                        <a href="account-profile.html#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Active Sessions</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 pt-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avtar bg-light-primary">
                                                                <i class="ph-duotone ph-desktop f-24"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <p class="mb-1">Celt Desktop</p>
                                                                <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-link-danger">Logout</button>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avtar bg-light-primary">
                                                                <i class="ph-duotone ph-device-tablet-camera f-24"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <p class="mb-1">Moon Tablet</p>
                                                                <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-link-danger">Logout</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-end">
                                        <button class="btn btn-outline-dark me-2">Clear</button>
                                        <button class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="user-set-passwort" role="tabpanel" aria-labelledby="user-set-passwort-tab">
                                <div class="card alert alert-warning p-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 me-3">
                                                <h4 class="alert-heading">Alert!</h4>
                                                <p class="mb-2">Your Password will expire in every 3 months. So change it periodically.</p>
                                                <a href="account-profile.html#" class="alert-link"><u>Do not share your password</u></a>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <img src="../assets/images/application/img-accout-password-alert.png" alt="img" class="img-fluid wid-80">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item pt-0 px-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Current Password <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <input type="password" class="form-control">
                                                        <div class="form-text"> Forgot password? <a href="account-profile.html#" class="link-primary">Click here</a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">New Password <span class="text-danger">*</span></label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item pb-0 px-0">
                                                <div class="row mb-0">
                                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Confirm Password <span class="text-danger">*</span></label>
                                                    <div class="col-md-8 col-sm-12">
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-end">
                                        <div class="btn btn-outline-secondary me-2">Cancel</div>
                                        <div class="btn btn-primary">Change Password</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Email Settings</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-3">Setup Email Notification</h6>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Email Notification</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div>
                                                <p class="text-muted mb-0">Send Copy To Personal Email</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Activity Related Emails</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-3">When to email?</h6>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Have new notifications</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">You're sent a direct message</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Someone adds you as a connection</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <hr class="my-2 border border-secondary-subtle">
                                        <h6 class="mb-3">When to escalate emails?</h6>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Upon new order</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">New membership approval</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div>
                                                <p class="text-muted mb-0">Member registration</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Updates from System Notification</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-3">Email you with?</h6>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">News about PCT-themes products and feature updates</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">Things you missed since you last logged into PCT-themes</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div>
                                                <p class="text-muted mb-0">News about products and other services</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div>
                                                <p class="text-muted mb-0">Tips and Document business products</p>
                                            </div>
                                            <div class="form-check form-switch p-0">
                                                <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-end btn-page">
                                        <div class="btn btn-outline-secondary">Cancel</div>
                                        <div class="btn btn-primary">Update Profile</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const endDateElement = document.getElementById("end-date");
        const daysElement = document.getElementById("days");
        const hoursElement = document.getElementById("hours");
        const minutesElement = document.getElementById("minutes");
        const secondsElement = document.getElementById("seconds");

        const getNextSunday = () => {
            const today = new Date();
            const nextSunday = new Date(today);
            nextSunday.setDate(today.getDate() + (7 - today.getDay()));
            return nextSunday;
        };

        const formatDate = (date) => {
            return date.toLocaleDateString('ru-RU', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        };

        const countdown = () => {
            const now = new Date().getTime();
            const distance = nextSunday.getTime() - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysElement.textContent = days;
            hoursElement.textContent = hours;
            minutesElement.textContent = minutes;
            secondsElement.textContent = seconds;

            if (distance < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "Отчет завершен!";
            }
        };

        const nextSunday = getNextSunday();
        endDateElement.textContent = formatDate(nextSunday);
        countdown();

        const interval = setInterval(countdown, 1000);

    });
</script>
