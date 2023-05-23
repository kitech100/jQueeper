<h4 class="mt-4 p-4"><?= $title ?></h4>
<div class="mt-4">
    <div class="d-flex justify-content-between p-4">
        <div class="d-flex align-items-center">
            <img src="<?php echo base_url('/assets/images/user_default_profile.png') ?>" alt="">
            <h5 class="ms-2" id="userNameDisplay">
                <?php
                echo ($this->session->userdata('username'));
                ?>
            </h5>
        </div>
        <div class="div">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addKeysModalOpen">
                Add Keys
            </button>
        </div>
    </div>
    <div class="p-4" id="keysDisplay">
        <!-- card goes here -->
    </div>
</div>

<!-- Modal Add key-->
<div class="modal fade" id="addKeysModalOpen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Keys</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addModalForm">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailAddressAdd" name="emailaddname" placeholder="name@example.com" autocomplete="off">
                        <label for="floatingInput">Email address</label>
                        <span class="text-danger" id="emailAddFormErr"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordAdd" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <span class="text-danger" id="passwordAddFormErr"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="linkAdd" name="linkadd" placeholder="www.gmail.com">
                        <label for="floatingInput">Link</label>
                        <span class="text-danger" id="linkAddFormErr"></span>
                    </div>
                    <select id="tagAdd" name="tagadd" class="form-select" aria-label="Default select example">
                        <option selected value="">Select Tag</option>
                        <option value="social">Social</option>
                        <option value="gaming">Gaming</option>
                        <option value="entertainment">Entertainment</option>
                    </select>
                    <span class="text-danger" id="selectAddErr"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="addKeysModal" class="btn btn-outline-info">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="headModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailAddressEdit" name="emailaddupdate" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        <!-- <span class="text-danger" id="emailAddFormErr"></span> -->
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="passwordEdit" name="passwordupdate" placeholder="Password">
                        <label>Password</label>
                        <!-- <span class="text-danger" id="passwordAddFormErr"></span> -->
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="linkEdit" name="linkupdate" placeholder="www.gmail.com">
                        <label for="floatingInput">Link</label>
                        <!-- <span class="text-danger" id="linkAddFormErr"></span> -->
                    </div>
                    <select id="tagEdit" name="tagupdate" class="form-select" aria-label="Default select example">
                        <option selected value="">Select Tag</option>
                        <option value="social">Social</option>
                        <option value="gaming">Gaming</option>
                        <option value="entertainment">Entertainment</option>
                    </select>
                    <!-- <span class="text-danger" id="selectAddErr"></span> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="updateKeysModal" type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" id="editModalHiddenValue">
            </div>
            </form>
        </div>
    </div>
</div>