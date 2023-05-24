<div class="position-absolute top-10 start-50 translate-middle">
    <div id="copyToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
        <div class="toast-header">
            <strong class="me-auto">Copied!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
<h4 class="mt-4 p-4"><?= $title ?></h4>


<div class="text-center">
    <div class="card">
        <h2 class="card-header">Generate Random Password</h2>
        <div class="card-body">
            <div class="input-group mb-3">
                <button class="btn btn-outline-dark" disabled>Key</button>
                <input type="text" id="inputKeyDisplay" class="form-control" value="">
                <button id="copyKeyDisplay" type="button" class="btn btn-outline-dark">Copy</button>
            </div>
            <button type="submit" id="generateBtn" class="btn btn-dark btn-lg">Generate</button>
        </div>
    </div>
</div>