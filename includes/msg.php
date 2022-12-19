<?php if (isset($_SESSION['msg'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['flag'] ?>">
        <?php echo $_SESSION['msg']; ?>
        <?php unset($_SESSION['msg']); ?>
    </div>
<?php } ?>

<?php if ($sessionManager->getFlash('error_message')) { ?>
    <p class="alert alert-<?php echo $sessionManager->getFlash('flag')  ?>">
        <?php echo $sessionManager->getFlash('error_message'); ?>
    </p>
<?php } ?>

<div id="msg" class="alert alert-info" style="display: none; position: fixed; z-index: 999; top: 100;">
    <i class="fas " id="msgIcon"></i> &nbsp; <span id="msgText">Message here</span>
</div>