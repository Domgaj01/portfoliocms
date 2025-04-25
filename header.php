<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.2.1/iconify.min.js"></script>
  <title><?php bloginfo("name"); ?></title>
  <meta name="description" content="<?php bloginfo("description"); ?>">
  <?php wp_head(); ?>
</head> 
<header class="w-full px-8 py-4">
  <div class="grid grid-cols-12 items-center gap-4">
    <!-- Logo -->
    <div class="col-start-2 col-span-1 flex justify-start">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri() ?>/img/INITIALS_LOGO1.png" alt="Logo" class="max-w-[96px] max-h-[69px] bg-cover block">
      </a>
    </div>

    <!-- Navigation -->
    <nav class="col-start-5 col-span-5 hidden md:flex justify-around items-center space-x-8">
      <a href="#projects" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">Projects</a>
      <a href="#about_us" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">About Me</a>
      <a href="#contact" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">Contact</a>
    </nav>
    <!-- Mobile Navigation -->
    <div class="col-span-12 flex justify-center md:hidden mt-4 space-x-6">
      <a href="#projects" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">Projects</a>
      <a href="#about" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">About Me</a>
      <a href="#contact" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="text-black hover:underline font-medium">Contact</a>
    </div>
  </div>

  <script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
</script>
</header>