<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php 
            $small_text = get_field("small_text");
            $heading = get_field("heading");
            $paragraph = get_field("paragraph");
            $image = get_field("image");
            $headingbr = get_field("headingbr");
            $about_me = get_field("about_me");
            $about_me_p = get_field("about_me_p");
            $me = get_field("me");
            $cv = get_field("cv");
            $videocv = get_field("videocv");
            $colab_heading = get_field("colab_heading");
            $colab_text = get_field("colab_text");
            $colab_image = get_field("colab_image");
            $colab_me = get_field("colab_me");
            $colab_button = get_field("colab_button");
            $project_tittle = get_field("project_tittle");
            ?>
  

        <div class="relative pb-15">
  <div class="grid grid-cols-12 gap-[10px] items-center max-w-7xl mx-auto px-6">
    
   
    <div class="hidden md:block md:col-span-2"></div>
    <div class="col-span-12 md:col-span-6 flex justify-center md:justify-start z-0 order-1 md:order-2">
      <img src="<?php echo esc_url($image["url"])?>" alt="<?php echo esc_attr($image["alt"])?>" class="w-3/4 ml-3 md:w-full max-w-sm">
    </div>
    <div class="col-span-12 md:col-span-4 flex flex-col z-10 pb-10 md:pb-[170px] text-center md:text-left order-2 md:order-1">
      <p class="text-sm uppercase tracking-wide pb-[10px]"> <?php echo esc_html($small_text)?> </p>
      <h1 class="text-3xl md:text-4xl font-bold leading-tight pb-[30px]">  <?php echo esc_html($heading)?> <br /> <?php echo esc_html($headingbr)?> </h1>
      <p class="text-black text-base md:text-lg pb-[50px]"> <?php echo esc_html($paragraph)?> </p>
      <div>
      <a href="#learn" onclick="event.preventDefault(); document.querySelector('#learn').scrollIntoView({ behavior: 'smooth' });">
        <button class="w-[205px] h-[47px] bg-white text-black px-6 py-2 rounded hover:bg-gray-200 transition">Learn more</button>
        </a>
      </div>
    </div>

  </div>
</div>

<section id="projects" class="project relative z-20 pt-10 md:pt-0 md:-mt-75 [@media(min-width:768px)]:pt-50 [@media(min-width:885px)]:pt-0">
    <?php 
        $projectargs = new WP_Query(array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'orderby' => 'rand',
        ));
    ?>

  <div class="max-w-7xl mx-auto px-6 pb-[20px]">
    <h2 class="text-3xl font-semibold mb-6"> <?php echo esc_html($project_tittle)?> </h2>
    <div class="flex flex-wrap justify-between gap-y-10">
    <?php while($projectargs->have_posts()): $projectargs->the_post(); ?>
  <?php 
    $project_heading = get_field("project_heading");
    $project_text = get_field("project_text");
    $project_image1 = get_field("project_image1");
    $project_image2 = get_field("project_image2");
    $project_image3 = get_field("project_image3");
    $project_image4 = get_field("project_image4");
    $project_button_link = get_field("project_button_link");
    $project_slug = get_post_field('post_name', get_post());
  ?> 

  <div class="w-full sm:w-1/2 p-1 lg:w-[33%] text-center">
    <div class="text-center">
      <div class="h-[220px]">
        <img src="<?php echo esc_url($project_image1["url"])?>" alt="<?php echo esc_attr($project_image1["alt"])?>" class="h-full w-full object-cover rounded-lg">
      </div>
      <div class="text-center mt-4">
        <h3 class="text-lg font-semibold mb-2"><?php echo esc_html($project_heading)?></h3>
        <p class="text-sm mb-4 break-words overflow-hidden"><?php echo esc_html(mb_substr($project_text, 0, 100)) . '...'; ?></p>
        <button data-project="<?php echo esc_attr($project_slug); ?>" class="openModalBtn w-[205px] h-[47px] bg-white text-black px-6 py-2 rounded hover:bg-gray-200 transition">
          View Project
        </button>
      </div>
    </div>
  </div>

  <div id="modal-<?php echo esc_attr($project_slug); ?>" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
  <div class="bg-[#212529] max-w-6xl w-full mx-4 md:mx-8 p-6 md:p-10 rounded-lg flex flex-col md:flex-row gap-6 relative overflow-y-auto max-h-screen sm:max-h-[90vh]"
       onclick="event.stopPropagation()">

       <div class="w-full md:w-1/2">
  <div class="w-full aspect-square mb-4">
    <a href="<?php echo esc_url($project_image1['url']); ?>" target="_blank">
      <img src="<?php echo esc_url($project_image1['url']); ?>" alt="<?php echo esc_attr($project_image1['alt']); ?>" class="w-full h-full object-cover rounded-lg" />
    </a>
  </div>
  <div class="grid grid-cols-3 gap-2">
    <a href="<?php echo esc_url($project_image2['url']); ?>" target="_blank">
      <img src="<?php echo esc_url($project_image2['url']); ?>" alt="<?php echo esc_attr($project_image2['alt']); ?>" class="w-full aspect-square object-cover rounded-lg"/>
    </a>
    <a href="<?php echo esc_url($project_image3['url']); ?>" target="_blank">
      <img src="<?php echo esc_url($project_image3['url']); ?>" alt="<?php echo esc_attr($project_image3['alt']); ?>" class="w-full aspect-square object-cover rounded-lg"/>
    </a>
    <a href="<?php echo esc_url($project_image4['url']); ?>" target="_blank">
      <img src="<?php echo esc_url($project_image4['url']); ?>" alt="<?php echo esc_attr($project_image4['alt']); ?>" class="w-full aspect-square object-cover rounded-lg"/>
    </a>
  </div>
</div>

    <div class="w-full md:w-1/2 flex flex-col justify-between text-white">
      <div>
        <h2 class="text-3xl font-semibold mb-4"><?php echo esc_html($project_heading); ?></h2>
        <p class="text-sm leading-loose mb-6"><?php echo esc_html($project_text); ?></p>
      </div>

      <?php if (!empty($project_button_link)) : ?>
        <div class="flex justify-center md:justify-center">
          <a href="<?php echo esc_url($project_button_link); ?>" target="_blank" rel="noopener noreferrer">
            <button class="w-[205px] h-[47px] bg-white text-black px-6 py-2 rounded hover:bg-gray-200 transition">
              View Website
            </button>
          </a>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div>

<?php endwhile; wp_reset_postdata(); ?>

<script>

  document.querySelectorAll('.openModalBtn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      const slug = btn.dataset.project;
      const modal = document.getElementById(`modal-${slug}`);
      if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
    });
  });

  document.querySelectorAll('[id^="modal-"]').forEach(modal => {
    modal.addEventListener('click', () => {
      modal.classList.remove('flex');
      modal.classList.add('hidden');
    });
  });


  document.querySelectorAll('[id^="modal-"] > div').forEach(content => {
    content.addEventListener('click', e => e.stopPropagation());
  });
</script>


</section>

<section id="about_me" class="py-16 bg-[#212529]">
  <div class="px-4 mx-auto max-w-[1065px] grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
  
    <div class="flex justify-center items-center">
    <img src="<?php echo esc_url($me["url"])?>" alt="<?php echo esc_attr($image["alt"])?>" 
        class="rounded-lg shadow-lg w-auto max-h-[420px] object-contain">
    </div>

    <div>
      <h2 class="text-2xl md:text-3xl font-bold uppercase mb-4 text-white">
      <?php echo esc_html($about_me)?>
      </h2>
      <p class="text-white leading-relaxed text-justify">
      <?php echo esc_html($about_me_p)?>
      </p>
      <div class="pt-[70px]">
    <a href="<?php echo esc_url($cv['url']); ?>" download>
      <button class="w-[205px] h-[47px] bg-white text-black px-6 py-2 rounded hover:bg-gray-200 transition">
        Download My CV
      </button>
    </a>
</div>
    </div>
    

  </div>
</section>

<section id="learn" class="w-full bg-[#212529] flex items-center justify-center py-6 md:h-[600px]">
  <div class="w-full max-w-[1065px] px-4">
    <div class="relative w-full pb-[50.25%] md:h-full">
      <iframe 
        class="absolute top-0 left-0 w-full h-full rounded-xl"
        src="<?php echo $videocv; ?>" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>


<section class="///Reviews">
    <?php 
    $reviews = new WP_Query(array(
        'post_type' => 'review',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
    ));
    ?>
    <?php if($reviews->have_posts()): ?>
    <section class="py-16 bg-[#212529]">
        <div class="container mx-auto px-4">
            <div class="flex justify-center gap-6 flex-wrap md:flex-nowrap px-4 sm:px-6">
                <?php while($reviews->have_posts()): $reviews->the_post(); ?>
                <?php 
                    $user_name = get_field("user_name");
                    $review_date = get_field("review_date");
                    $review_text = get_field("review_text");
                    $star_rating = get_field("star_rating");
                ?> 
                <div class="bg-[#f8f3f1] px-6 py-6 rounded-[5px] w-full sm:w-[48vh] h-auto relative shadow-md">
                    <h3 class="font-bold text-lg mb-1"><?php echo esc_html($user_name); ?></h3>
                    <p class="text-sm mb-4"><?php echo esc_html($review_date); ?></p>
                    <p class="text-base mb-4 leading-relaxed">
                        <?php echo esc_html($review_text); ?>
                    </p>
                    <div class="text-[#FFC300] text-xl mb-4 flex space-x-1">
                    <?php 
                    for ($j = 0; $j < $star_rating; $j++) {
                        ?>
                            <span class="iconify" data-icon="twemoji:star"></span>
                        <?php
                    }
                    ?>
                    </div>
                    <span class="iconify text-7xl text-[#22223B] p-2 rounded-full bottom-4 right-4 absolute" data-icon="bxs:quote-left"></span>
                </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
            <div class="text-center mt-10 px-4">
            </div>
        </div>
    </section>
    <?php endif; ?>
</section>

<section id="contact" class="relative bg-white py-20 px-6 overflow-hidden">
  <div class="max-w-7xl mx-auto relative h-[500px] flex items-center justify-center">

    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-[500px] h-[500px] rounded-full overflow-hidden z-0">
      <img src="<?php echo esc_url($colab_image["url"])?>" alt="<?php echo esc_attr($image["alt"])?>" class="w-full h-full object-cover" />
    </div>
    <div class="relative z-10 w-[500px] h-[500px] rounded-full bg-white shadow-xl flex flex-col items-center justify-center text-center p-10">
      <h2 class="text-4xl font-bold text-gray-900 mb-4"><?php echo esc_html($colab_heading)?></h2>
      <p class="text-gray-600 mb-6 leading-relaxed text-base max-w-[320px]">
      <?php echo esc_html($colab_text)?>
      </p>
      <a href="mailto:<?php echo esc_attr($colab_button)?>">
      <button class="bg-gray-900 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition">
      Conect With Me
      </button>
    </div>

    <div class="absolute left-0 top-1/2 transform z-0 hidden lg:block">
    <img src="<?php echo esc_url($colab_me["url"])?>" alt="<?php echo esc_attr($image["alt"])?>" class="w-60 h-auto" />
    </div>
    </a>

  </div>
    </section>


        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>