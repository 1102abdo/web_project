<?php
session_start();
require_once("../classes.php");
$user = unserialize($_SESSION["user"]);
$all_users = $user->get_users();
$all_posts = $user->get_posts();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
  <script src="dashboard.js"></script>
  <title>Dashboard</title>
</head>

<body>




  <div class="container">
    <header class=" p-3 mb-3 border-bottom">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="Blog Home.html">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mx-5" id="navbarNav">
            <ul class="navbar-nav mx-5">
              <li class="nav-item  ">
                <a class="nav-link active" href="#userAccounts">User Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#userPosts">User Posts</a>
              </li>

            </ul>
            <ul class="navbar-nav ms-auto ">
              <div class="d-grid gap-2 row-gap-1">
                <form class="form-inline mr-auto">
                  <a href="../logout.php" class="btn btn-outline-primary me-2" role="button">Log out</a>
                </form>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section id="userAccounts">
        <h2>User Accounts</h2>
        <table id="">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($all_users as $user) {
            ?>
              <tr>
                <th><?= $user["ID"] ?></th>

                <th><?= $user["name"] ?></th>
                <th><?= $user["email"] ?></th>
                <th><?= $user["phone"] ?></th>
                <th >
                  <form method="post" action="DeleteUser.php" style="display: inline-block;">
                    <button type="submit" name=""  class="btn btn-danger" >Delete</button>
                    <input type="hidden" name="user_id" value="<?=$user["ID"] ?>">
                  </form>
                  <form method="post" action="BanUser.php" style="display: inline-block;">
                    <button type="submit" name=""  class="btn btn-danger" >Ban</button>
                    <input type="hidden" name="user_id" value="<?=$user["ID"] ?>">
                  </form>
                </th>
              </tr>
            <?php
            }
            ?>

          </tbody>
        </table>
      </section>
      <section id="userPosts">
        <h2>User Posts</h2>
        <table id="">
          <thead>
            <tr>
              <th>Post ID</th>
              <th>user name</th>
              <th>title</th>
              <th>content</th>
              <th>photo</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($all_posts as $post) {
            ?>
              <tr>
                <th><?= $post["ID"] ?></th>
                <th><?= $post["name"] ?></th>
                <th><?= $post["title"] ?></th>
                <th><?= $post["content"] ?></th>
                <th><?= $post["image"] ?></th>
                <th>
                <form method="post" action="delete_post.php">
                <button type="submit" name=""  class="btn btn-danger" >Delete</button>
                <input type="hidden" name="post_id" value="<?=$post["ID"] ?>">
                  </form>
                </th>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </section>
    </main>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>