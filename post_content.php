<h3>
  <span>Location: <?php echo get_the_term_list( $post->ID, 'location', '', ', ' ); ?></span><br>
  <span>Category: <?php echo get_the_term_list( $post->ID, 'category', '', ', ' ); ?></span><br>
  <span>Salary: <?php echo get_the_term_list( $post->ID, 'salary', '', ', ' ); ?></span>
</h3>
