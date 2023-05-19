<div class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 56px);">
    <div class="p-3 border" style="width: 400px;">
        <h1 class="text-center">
            <?= $title ?>
        </h1>
        <form id="signUp" method="POST">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstname" aria-describedby="emailHelp">
                <span class="text-danger" class="text-danger" id="firstNameErr"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" aria-describedby="emailHelp">
                <span class="text-danger" id="lastNameErr"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" id="userName" name="username" aria-describedby="emailHelp">
                <span class="text-danger" id="userNameErr"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <span class="text-danger" id="emailErr"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <span class="text-danger" id="passwordErr"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmpassword">
                <span class="text-danger" id="confirmPassErr"></span>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-secondary">Sign up</button><br>
                <span>
                    Already have an account?<br>
                    <a class="link-secondary" href="<?php echo base_url() ?>login">Log in</a>
                </span>
            </div>
        </form>
    </div>
</div>