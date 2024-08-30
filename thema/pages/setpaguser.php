<div class="auth-main v1">
    <div class="auth-wrapper">
        <div class="auth-form">
            <form action="/runquery" method="post" class="card my-5">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./thema/assets/images/authentication/img-auth-login.png" alt="images" class="img-fluid mb-3" />
                        <h4 class="f-w-500 mb-1">Set DataBase</h4>
                    </div>
                    <input type="text" name="type" value="savebd" hidden="hidden">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="NameBD" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Login" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="password" placeholder="Password" />
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </form>
        </div>


    </div>
</div>