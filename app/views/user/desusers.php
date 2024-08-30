<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Profile</h4>
                <h6>User Profile</h6>
            </div>
        </div>

        <div class="card">
            <form class="card-body">
                <div class="profile-set">
                    <div class="profile-head">
                    </div>
                    <div class="profile-top">
                        <div class="profile-content">
                            <div class="profile-contentimg">
                                <img src="./thema/assets/img/customer/noimages.jpg" alt="img" id="blah">
                                <div class="profileupload">
                                    <input type="file" id="imgInp">
                                    <a href="javascript:void(0);"><img src="./thema/assets/img/icons/edit-set.svg" alt="img"></a>
                                </div>
                            </div>
                            <div class="profile-contentname">
                                <h2>William Castillo</h2>
                                <h4>Updates Your Photo and Personal Details.</h4>
                            </div>
                        </div>
                        <div class="ms-auto">
                            <a href="#" class="btn btn-submit me-2">Save</a>
                            <a href="#" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Name/Lastname</label>
                            <input type="text" value="<?php echo htmlspecialchars($users[0]['yourname']); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Role</label>
                            <input type="text" value="<?php echo htmlspecialchars($users[0]['role']); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" value="<?php echo htmlspecialchars($users[0]['phone']); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" value="<?php echo htmlspecialchars($users[0]['email']); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" value="<?php echo htmlspecialchars($users[0]['counter']); ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class=" pass-input" value="">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit"  class="btn btn-submit me-2">Submit</button>
                        <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>