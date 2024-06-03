<!-- Toast container -->
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
    <?php if (session()->getFlashdata('success') || session()->getFlashdata('error')) : ?>
        <?php $toastClass = session()->getFlashdata('success') ? 'text-bg-success' : 'text-bg-danger'; ?>
        <?php $iconClass = session()->getFlashdata('success') ? 'fa-circle-check' : 'fa-circle-xmark'; ?>
        <div id="toast" class="toast align-items-center <?= $toastClass ?> border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="8000">
            <div class="d-flex">
                <div class="toast-body fs-6">
                    <i class="fa-regular <?= $iconClass ?>"></i>
                    <?= session()->getFlashdata('success') ?? session()->getFlashdata('error') ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>
</div>