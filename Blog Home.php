<?php
session_start();
require_once("header.php");
require_once("classes.php");
$user = unserialize($_SESSION["user"]);
$homePosts = $user->home_posts();
?>
<!--?/ Nav -->

<!--* Recent blog posts -->
<section class="bg-body shadow">
  <!--! Left -->
  <div class="container">
    <div class=" shadow-sm">
      <div class="row">
        <div class="col-md-12 my-2">
          <h5 class="text-text-center">Recent blog posts</h5>
          <div class="shadow">
            <!-- ----------------------------------- -->
            <div class="row ">
              <?php
              foreach ($homePosts as $post) {
              ?>


                <div class=" col-lg-4 gy-5">
                  <div class="card hover-img overflow-hidden rounded-2">
                    <div class="card-body p-0">
                      <?php
                      
                      ?>
                        <p class="small mb-0 ms-2"><?= $post["name"] ?></p>
                        <img src="<?= $post["image_user"] ?>" alt="avatar" width="75" height="50" style="border-radius: 30px;"  />
                        <?php
                      if (!empty($post["image"])) {
                        ?>

                        <img src="<?= $post["image"] ?>" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                      <?php
                      }
                      ?>
                      <div class="p-4 d-flex align-items-center justify-content-between">
                        <div>
                          <span class="text fs-2"><?= $post["title"] ?></span>
                          <h6 class="fw-semibold mb-0 fs-4"><?= $post["content"] ?></h6>
                          <small class="text-primary  my-lg-4"><?= $post["created_at"] ?></small>

                        </div>
                      </div>
                      <!-- comment -->
                      <!-- Comment&Like section -->
                      <button class="btn like-button my-1" type="button">
                        <i class="bi bi-heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                          </svg>
                        </i>
                        <span class="like-count">0</span>
                      </button>

                      <form class="comment-form" action="store_comment_2.php">
                        <input type="text" name="comment" class="form-control" id="comment-input" placeholder="Enter your comment...">
                        <input type="hidden" name="post_id" value="<?= $post["ID"] ?>">
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                      </form>
                      <?php
                      $comments = $user->my_comments($post["ID"]);
                      foreach ($comments as $comment) {
                      ?>
                        <div class="card mb-4">
                          <div class="card-body">
                            <p><?= $comment["content"] ?></p>
                            <!-- ? -->


                            <div class="d-flex justify-content-between">
                              <div class="d-flex flex-row align-items-center">
                                <img src="<?= $comment["image_user"] ?>" alt="avatar" width="25" height="25" />
                                <p class="small mb-0 ms-2"><?= $comment["name"] ?></p>
                              </div>
                              <div class="d-flex flex-row align-items-center">
                                <p class="small text-muted mb-0"><?= $comment["created_at"] ?></p>

                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?>


                      <!-- comment -->
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
            <!-- ------------------------- -->
          </div>
        </div>


        </main>
        <!--*/ All blog posts -->

        <?php
        require_once("footer.php");
        ?>