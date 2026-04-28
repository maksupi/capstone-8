<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-6">
        <table class="table table-borderless">
            <tr>
                <td style="color:#4154f1; font-weight:600; width:140px;">Username</td>
                <td><?= esc(session()->get('username')) ?></td>
            </tr>
            <tr>
                <td style="color:#4154f1; font-weight:600;">Role</td>
                <td>
                    <span class="badge bg-danger"><?= esc(session()->get('role')) ?></span>
                </td>
            </tr>
            <tr>
                <td style="color:#4154f1; font-weight:600;">Email</td>
                <td style="color:#4154f1;"><?= esc(session()->get('email')) ?></td>
            </tr>
            <tr>
                <td style="color:#4154f1; font-weight:600;">Login Time</td>
                <td><?= esc(session()->get('login_time')) ?></td>
            </tr>
            <tr>
                <td style="color:#4154f1; font-weight:600;">Status</td>
                <td>
                    <?php if (session()->get('isLoggedIn')): ?>
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Sudah Login</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Belum Login</span>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</div>

<?= $this->endSection() ?>