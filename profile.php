<?php
session_start();
require_once("header.php");

$posts = $user->my_posts($user->id);

?>
<div class="container">
  <div class="card overflow-hidden">
    <div class="card-body p-0">
      <img src="https://www.bootdey.com/image/1352x300/00FFFF/000000" alt="" class="img-fluid">
      <div class="row align-items-center">
        <div class="col-lg-4 order-lg-1 order-2">
          <div class="d-flex align-items-center justify-content-around m-4">
            <div class="text-center">
              <i class="fa fa-file fs-6 d-block mb-2"></i>
              <h4 class="mb-0 fw-semibold lh-1">938</h4>
              <p class="mb-0 fs-4">Posts</p>
            </div>
            <div class="text-center">
              <i class="fa fa-user fs-6 d-block mb-2"></i>
              <h4 class="mb-0 fw-semibold lh-1">3,586</h4>
              <p class="mb-0 fs-4">Followers</p>
            </div>
            <div class="text-center">
              <i class="fa fa-check fs-6 d-block mb-2"></i>
              <h4 class="mb-0 fw-semibold lh-1">2,659</h4>
              <p class="mb-0 fs-4">Following</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-n3 order-lg-2 order-1">
          <div class="mt-n5">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px;" ;="">
                <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;" ;="">
                  <img src="<?=$user->image_user?>" alt="" class="w-100 h-100">
                </div>
              </div>
            </div>
            <div class="text-center">
              <h5 class="fs-5 mb-0 fw-semibold"><?= $user->name?></h5>
            </div>
          </div>
          <?php
          if (isset($_GET['msg']) && $_GET["msg"] == "success") {
            # code...
          ?>
            <div class="alert alert-danger" role="alert" id="myElement">
              <strong>Update</strong> updated image successfully
            </div>
          <?php
          }
          ?>
          <?php
          if (isset($_GET['msg']) && $_GET["msg"] == "nophoto") {
            # code...
          ?>
            <div class="alert alert-danger" role="alert" id="myElement">
              <strong>NOT uploaded</strong> please select photo
            </div>

          <?php
          }
          ?>
          <form action="profile_image.php" method="post" enctype="multipart/form-data">
            <!-- <label for="" class="form-label">Upload photo</label>
                  <!-- <input type="file" size="20cm" class="form-control form-control-sm" name="" id="" aria-describedby="helpid" placeholder="" /> -->

            <!-- <input type="file" name="image" class="btn btn-dark btn-block mb-2">Upload</input> --> 
            <!-- <button type="submit" class="btn btn-primary"> -->
              <!-- Save -->
            <!-- </button> -->

            <div class="mb-3">
          <label for="postImage" class="form-label">Upload Image</label>
          <input class="form-control" name="image" type="file" id="postImage">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>





          </form>
        </div>

      </div>
      <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-light-info rounded-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
            <i class="fa fa-user me-2 fs-6"></i>
            <span class="d-none d-md-block">Profile</span>
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false" tabindex="-1">
            <i class="fa fa-users me-2 fs-6"></i>
            <span class="d-none d-md-block">posts</span>
          </button>
        </li>
      </ul>
    </div>
  </div>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <!-- Profile tab content --------------------------------------------------->
      <p>Profile content goes here.</p>
    </div>
    <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
      <!-- Followers tab content -->
      <p>Followers content goes here.</p>
    </div>
    <div class="tab-pane fade" id="pills-friends" role="tabpanel" aria-labelledby="pills-friends-tab" tabindex="0">
      <!-- Posts tab content -->
      <div class="d-flex justify-content-between mt-3 mb-4">
        <h3 class="mb-3 mb-sm-0 fw-semibold">Create a Post</h3>
      </div>
      <?php
      if (!empty($_GET["msg"]) && $_GET["msg"] == "done") {
      ?>
        <div class="alert alert-success" role="alert" id="myElement">
          <strong>success</strong>uploaded post
        </div>

      <?php
      }

      ?>
      <?php
      if (!empty($_GET["msg"]) && $_GET["msg"] == "content is required") {
      ?>
        <div class="alert alert-success" role="alert" id="myElement">
          <strong>Faild</strong>Content is requirede
        </div>

      <?php
      }

      ?>
      <form method="post" action="store_post.php" enctype="multipart/form-data">
      <div class="mb-3">
          <label for="postText" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" placeholder="title">
        </div>
        <div class="mb-3">
          <label for="postText" class="form-label">Post Text</label>
          <textarea class="form-control" name="content" id="postText" rows="3" placeholder="What's on your mind?"></textarea>
        </div>
        <div class="mb-3">
          <label for="postImage" class="form-label">Upload Image</label>
          <input class="form-control" name="image" type="file" id="postImage">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
      </form>
    </div>
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">
        <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
          <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Gallery <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2"></span></h3>
        </div>
        <!-- ---------------------------------------------------------------- -->
        <div class="row ">
          <?php
          foreach ($posts as $post) {
          ?>


            <div class="col-md-6 col-lg-4 gy-5">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
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
                    
                    <form class="comment-form"  action="store_comment.php">
                    <input type="text" name="comment" class="form-control" id="comment-input" placeholder="Enter your comment...">
                      <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
                      <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                    <?php
                      $comments = $user->my_comments($post["id"]);
                      foreach ($comments as $comment) {
                        ?>
                        <div class="card mb-4">
                          <div class="card-body">
                            <p><?=$comment["content"]?></p>
  
                            <div class="d-flex justify-content-between">
                              <div class="d-flex flex-row align-items-center">
                                <img src="<?=$comment["image_user"]?>" alt="avatar" width="25" height="25" />
                                <p class="small mb-0 ms-2"><?=$comment["name"]?></p>
                              </div>
                              <div class="d-flex flex-row align-items-center">
                                <p class="small text-muted mb-0"><?=$comment["created_at"]?></p>
                           
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

        <!-------------------------------------------------------------------  -->
      </div>
    </div>
  </div>

  <script>
    setTimeout(function() {
      var elementToHide = document.getElementByid('myElement');
      if (elementToHide) {
        elementToHide.style.display = 'none';
      }
    }, 5000);
  </script>




  <?php
  require_once("footer.php");

  ?>