<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if(session()->get('perfil_id') == 1): ?>
                <div>
                    <img class="center" height="100px" width="100px" src="<?= base_url('assets/img/admin.png'); ?>">
                </div>

            <?php elseif(session()->get('perfil_id') == 2): ?>
                <div>
                    
                    <img class="center" height="100px" width="100px" src="<?= base_url('assets/img/cliente.png'); ?>">
                </div>

            <?php endif; ?>
        </div>
    </div>
    
</div>
