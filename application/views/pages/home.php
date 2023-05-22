<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around" style="height: calc(100vh - 56px);">
    <div class="">
        <h1 style="font-size: 4.2rem;">Safe place <br>
            for all your<br>
            passwords <br>
        </h1>
        <div class="d-flex align-items-center mt-5">
            <?php if (!$this->session->userdata('is_logged_in')) : ?>
                <a type="button" class="btn btn-secondary rounded-0 " href="<?php echo base_url() ?>login">Get Started</a>
            <?php endif; ?>
            <a class="link-secondary ms-auto" href="<?php echo base_url() ?>whats-new">See what's New</a>
        </div>
    </div>
    <img src="<?php echo base_url('/assets/images/Home_page_img.svg') ?>" class="img-fluid" alt="" width="650px">
</div>