<h4 class="mt-4"><?= $title ?></h4>
<div class="mt-4">
    <div class="d-flex justify-content-between p-4">
        <div class="d-flex align-items-center">
            <img src="<?php echo base_url('/assets/images/user_default_profile.png') ?>" alt="">
            <h5 class="ms-2">John Doe</h5>
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

<!-- Modal -->
<div class="modal fade" id="addKeysModalOpen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Keys</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Link</label>
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Tag</option>
                    <option value="1">Social</option>
                    <option value="2">Gaming</option>
                    <option value="3">Entertainment</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="addKeysModal" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>