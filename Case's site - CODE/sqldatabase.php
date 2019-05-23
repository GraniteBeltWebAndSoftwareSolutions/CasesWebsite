<?php
  $host = 'localhost';
  $user = 'akkyo7dw6lhh';
  $password = '0101RdRZ#';
  $dbname = 'gaiman';
  // Set DSN
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  // Create a PDO instance
  $connection = new PDO($dsn, $user, $password);
  // Set PDO::FETCH_OBJ as fetch() default attributes
  $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  // Enables or disables emulation of prepared statements (and allows us to set placeholders for our limits)
  $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // PDO QUERY
  // Go grab all posts
  // $stmt = $connection->query('SELECT * FROM posts');
  // Display all titles
  // PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
  // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   echo $row['title'] . '<br>';
  // }
  // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
  //   echo $row->title . '<br>';
  // }
  // PREPARED STATEMENTS (prepare & execute)
  // UNSAFE
  // $sql = "SELECT * FROM posts WHERE author = '$author'";
  // FETCH MULTIPLE POSTS
  // User Input

  echo "<a href='snakeLikeGameJavascript.html'>SnakeLikeGame</a>";


  $author = 'Brad';
  $isPublished = true;
  $id = 1;
  $limit = 1;
  // Positional Params
  //$sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
  $sql = 'SELECT * FROM books';
  $stmt = $connection->prepare($sql);
  $stmt->execute([$author, $isPublished, $limit]);
  $posts = $stmt->fetchAll();
  // Named Params
  // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
  // $stmt = $connection->prepare($sql);
  // $stmt->execute(['author' => $author, 'is_published' => $isPublished]);
  // $posts = $stmt->fetchAll();
  // var_dump($posts);
  foreach ($posts as $post) {
    echo $post->title . '<br>';
  }


  echo "Hi there";
  // FETCH SINGLE POST
  // $sql = 'SELECT * FROM posts WHERE id = :id';
  // $stmt = $connection->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch();
  // echo $post->body;
  // GET ROW COUNT
  // $stmt = $connection->prepare('SELECT * FROM POSTS WHERE author = ?');
  // $stmt->execute([$author]);
  // $postCount = $stmt->rowCount();
  // echo $postCount;
  // INSERT DATA
    // $title = 'Post Five';
    // $body = 'This is post five';
    // $author = 'Kevin';
    // $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
    // $stmt = $connection->prepare($sql);
    // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
    // echo 'Post Added';
    // UPDATE DATA
    // $id = 1;
    // $body = 'This is the updated post';
    // $sql = 'UPDATE posts SET body = :body WHERE id = :id';
    // $stmt = $connection->prepare($sql);
    // $stmt->execute(['body' => $body, 'id' => $id]);
    // echo 'Post Updated';
    // DELETE DATA
    // $id = 3;
    // $sql = 'DELETE FROM posts WHERE id = :id';
    // $stmt = $connection->prepare($sql);
    // $stmt->execute(['id' => $id]);
    // echo 'Post Deleted';
    // SEARCH DATA
    // $search = "%f%";
    // $sql = 'SELECT * FROM posts WHERE title LIKE ?';
    // $stmt = $connection->prepare($sql);
    // $stmt->execute([$search]);
    // $posts = $stmt->fetchAll();
    // foreach ($posts as $post) {
    //   echo $post->title . '<br>';
    // }