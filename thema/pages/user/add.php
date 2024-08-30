
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Store Management</h4>
                <h6>Add/Update Store</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form id="myForm" class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Store Name</label>
                            <input type="text" name="yourname">
                            <input type="text" name="type" value="add" hidden>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="login">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" name="password" class="pass-input">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Role</label>
                            <input list="roles" type="text" name="role">
                            <datalist id="roles">
                                <option value="Administrator">
                                <option value="Project Manager">
                                <option value="Executor">
                                <option value="Analyst">
                                <option value="Developer">
                            </datalist>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit btn-sm me-2">Submit</button>
                        <a href="storelist.html" class="btn btn-sm btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>