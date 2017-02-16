<?

  // include configuration
  require_once('config.php');

  // wordpress fake-functions
  require_once('_template.php');
  require_once('_page.php');
  require_once('_wp_vars.php');
  require_once('_posts.php');

  // run the wordpress theme
  require_once(srcdir.'index.php');
