<div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 56px);">
    <div class="p-3 border" style="width: 400px;">
        <h1 class="text-center">
            <?= $title ?>
        </h1>
        <form id="logIn" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="userName" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-secondary">Login</button><br>
                <span>
                    Don't have an account?<br>
                    <a class="link-secondary" href="<?php echo base_url() ?>sign-up">Sign-up</a>
                </span>
            </div>
        </form>
    </div>
</div>