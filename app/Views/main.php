<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/tailwind/dist/output.css">
</head>
<body>
  <?php 
    $currentPage = $currentPage ?? '';

    $width = '';
    
    if ($currentPage === 'home') {
        $width = 'w-128';
    }
    else if ($currentPage === 'table'){
        $width = 'w-256';
    }
  ?>
  <section class="bg-login-bg dark:bg-black bg-cover bg-no-repeat flex justify-center items-center h-screen w-full"> 
      <div class="<?= $width ?> p-6 bg-[rgba(55,63,82,0.9)] dark:bg-[rgba(49,51,56,0.9)] shadow-md backdrop-blur-7 border border-opacity-18 rounded-lg relative"> 
          <button id="theme-toggle" class="absolute top-2 right-2 p-2 rounded-full w-10 h-10 text-white">
              <img id="theme-icon" src="/assets/icons/mode-light.svg" alt="Light mode icon"> 
          </button>    
          <?= $this->renderSection('body') ?>
      </div>
  </section>
  <script src="/assets/js/dark-mode.js"></script>
</body>
</html>