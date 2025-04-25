<footer class="bg-[#212529] text-white py-10 px-6">
  <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-12 gap-10">
    
    <!-- Left Column: Logo + Text -->
    <div class="md:col-span-3 md:col-start-2 text-center md:text-left">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img 
          src="<?php echo get_template_directory_uri() ?>/img/INITIALS_LOGO.png" 
          alt="Logo" 
          class="mx-auto md:mx-0 max-w-[96px] max-h-[69px] bg-cover block mb-4"
        >
      </a>
      <p class="text-sm leading-relaxed text-[#ecfdf5]">
        I’m a passionate and dedicated multimedia student who loves design, creativity, and bringing ideas to life.
      </p>
    </div>

    <!-- Middle Column: Contact -->
    <div class="md:col-span-3 md:col-start-6 mt-8 md:mt-0 text-center md:text-left">
      <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
      <ul class="space-y-2 text-sm text-[#ecfdf5]">
        <li class="flex justify-center md:justify-start items-center gap-2">
          <span class="iconify text-lg" data-icon="mdi:phone"></span>
          <a href="tel:+4549902869" class="hover:underline text-white">
          +45 49 90 28 69
          </a>
        </li>
        <li class="flex justify-center md:justify-start items-center gap-2">
          <span class="iconify text-lg" data-icon="mdi:email-outline"></span>
          <a href="mailto:domgaj01@easv365.dk" class="hover:underline text-white">
          domgaj01@easv365.dk
          </a>
          </li>
        <li class="flex justify-center md:justify-start items-center gap-4 mt-2">
  <a href="https://www.linkedin.com/in/dominik-gajdos/" target="_blank" class="text-xl hover:text-gray-300 transition">
    <span class="iconify" data-icon="mdi:linkedin" data-inline="false"></span>
  </a>
</li>
      </ul>
    </div>

    <!-- Right Column: Navigation -->
    <div class="md:col-span-3 md:col-start-10 mt-8 md:mt-0 text-center md:text-left">
      <h3 class="text-lg font-semibold mb-4">Navigation</h3>
      <ul class="space-y-2 text-sm text-[#ecfdf5] font-medium">
      <li>
  <a href="#projects" onclick="event.preventDefault(); document.querySelector('#projects').scrollIntoView({ behavior: 'smooth' });" class="hover:text-gray-300 transition">PROJECTS</a>
</li>
<li>
  <a href="#about_me" onclick="event.preventDefault(); document.querySelector('#about_me').scrollIntoView({ behavior: 'smooth' });" class="hover:text-gray-300 transition">ABOUT ME</a>
</li>
        <li><a href="mailto:domgaj01@easv365.dk" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="hover:text-gray-300 transition">CONTACT</a></li>
      </ul>
    </div>

  </div>

  <!-- Bottom Footer -->
  <div class="border-t border-gray-300 mt-10 pt-4 text-xs text-[#ecfdf5] flex flex-col md:flex-row justify-between items-center w-full gap-2 text-center">
    <span>@ 2025</span>
    <span>Copyright © Dominik Gajdos Denmark</span>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
