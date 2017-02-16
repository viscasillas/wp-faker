<?php

  function faker_posts(){
    if(file_exists('./data/posts.json')){
      return json_decode(file_get_contents('./data/posts.json'));
    }else{
      return [];
    }
  }

  function have_posts(){
    if(empty(faker_posts())){
      return false;
    }else{
      return true;
    }
  }

  function the_id(){
    $index = 1;
    if(isset($_GET['post'])){
      $index = $_GET['post'] - 1;
    }
    return $index;
  }

  function the_post(){
    $posts = faker_posts();
    return $posts[the_id()];
  }

  function the_title(){
    $posts = faker_posts();
    if(isset($posts[the_id()]->title)){
      return $posts[the_id()]->title;
    }else{
      return '[no "title" associated for post:"'.the_id().'"]';
    }
  }

  function the_body(){
    $posts = faker_posts();
    if(isset($posts[the_id()]->body)){
      return $posts[the_id()]->body;
    }else{
      return '[no "body" associated for post:"'.the_id().'"]';
    }
  }

  function the_date(){
    $posts = faker_posts();
    if(isset($posts[the_id()]->date)){
      return $posts[the_id()]->date;
    }else{
      return '[no "date" associated for post:"'.the_id().'"]';
    }
    return $posts[the_id()]->date;
  }
