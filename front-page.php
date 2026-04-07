<?php get_header(); ?>

<main class="site-main">
  <section class="projects">

    <?php
    $projects = array(
      array(
        'image' => 45,
        'title' => 'Luminous Identity',
        'link' => '/luminous-identity/'
      ),
      array(
        'image' => 49,
        'title' => 'Luminous Identity',
        'link' => '/luminous-identity/'
      ),
      array(
        'image' => 46,
        'title' => 'Project Three',
        'link' => '/project-three/'
      ),
      array(
        'image' => 47,
        'title' => 'Project Four',
        'link' => '/project-four/'
      ),
      array(
        'image' => 48,
        'title' => 'Project Five',
        'link' => '/project-five/'
      )
    );

    foreach ($projects as $project) : ?>

      <article class="project">
        <a href="<?php echo esc_url(home_url($project['link'])); ?>">

          <?php echo wp_get_attachment_image(
            $project['image'],
            'medium_large',
            false,
            array('class' => 'project-image')
          ); ?>

          <p class="project-title">
            <?php echo esc_html($project['title']); ?>
          </p>

        </a>
      </article>

    <?php endforeach; ?>

  </section>

  <p class="site-email footer-email">
    <?php echo esc_html(get_bloginfo('description')); ?>
  </p>

</main>

<?php get_footer(); ?>