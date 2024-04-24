<?php require_once './view/head.php';?>
<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require_once 'navbar.php'?>
        <div class="container-fluid page-body-wrapper">
            <?php require_once 'sidebar.php' ?>
            <div class="main-panel">
                <?php echo $content; ?>
                <?php require_once 'footer.php' ?>
            </div>
        </div>
    </div>
</body>
<?php require_once 'script.php'; ?>