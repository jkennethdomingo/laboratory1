<?= $this->include('include/header.php') ?>
<body>
    <?php
    $currentPage = $currentPage ?? '';
    $width = '';

    if ($currentPage === 'home') {
        $width = 'w-128';
    } else if ($currentPage === 'table') {
        $width = 'w-256';
    }
    ?>
    <section class="bg-white-bg dark:bg-main-bg bg-cover bg-no-repeat flex justify-center items-center h-screen w-full">
    <?= $this->include('include/sidebar.php') ?>
        <div class="<?= $width ?> p-6 bg-[rgb(253, 253, 253,)] dark:bg-[rgba(49,51,56,0.9)] shadow-md backdrop-blur-7 border border-opacity-18 rounded-lg relative">
            <?= $this->renderSection('body') ?>
            <?= $this->include('include/modal.php') ?>
        </div>
    </section>
    <script src="/assets/js/dark-mode.js"></script>
    <script src="/assets/js/modal.js"></script>
</body>
</html>