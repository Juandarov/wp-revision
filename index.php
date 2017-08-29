<?php get_header() ?>
<main>
    <h1>Flafty</h1>
            <section>
                <?php

                $posts = get_posts($args);

                foreach ($posts as $post) {
                
                    setup_postdata($post);
                    get_template_part('content', 'page');
                }

                ?>

            </section>
</main>
<?php get_footer() ?>
