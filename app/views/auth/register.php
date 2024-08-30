<div class="auth-main v1">
    <div class="auth-wrapper">
        <div class="auth-form">
            <form action="/runquery" method="post" class="card my-5">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./thema/assets/images/authentication/img-auth-login.png" alt="images" class="img-fluid mb-3" />
                        <h4 class="f-w-500 mb-1">Referal</h4>

                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nikname" placeholder="nikname" />
                        <input type="text" name="type" value="addusers" hidden="hidden">
                        <input type="text" name="idusers" value="<?=$_GET['id']?>" hidden="hidden">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="login" placeholder="login" />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="floatingInput1" name="password" placeholder="Password" />
                    </div>
                    <div class="d-flex mt-1 justify-content-between align-items-center">
                        <div class="form-check">

                            <label class="form-check-label text-muted" for="customCheckc1"></label>
                        </div>
                        <a href="forgot-password-v1.html"><h6 class="f-w-400 mb-0">Forgot Password?</h6></a>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                </div>
            </form>
        </div>


    </div>
</div>