<?php
session_start();
require_once("header.php");
$_SESSION["title"] = "Blog";
?>
  <!--?/ Nav -->

  <!--* Recent blog posts -->
  <section class="bg-body shadow">
    <!--! Left -->
    <div class="container">
      <div class=" shadow-sm">
        <div class="row">
          <div class="col-md-6 my-2">
            <h5 class="my-">Recent blog posts</h5>
            <div class="shadow">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/Image1.png" class="card-img rounded First" alt="Image" style="justify-content:center; height: 100%;">
                </div>
                <div class="col-md-12">
                  <div class="card-body ">
                    <small class="text-primary  my-lg-4">Olivia Rhye • 1 Jan 2023</small>
                    <h5 class="card-title my-xl-4">UX review presentations</h5>
                    <p class="card-text">How do you create compelling presentations that wow your colleagues and impress
                      your managers?</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="bbtn">
                        <a href="">
                          <span class="badge rounded-pill text-bg-primary ">Leadership</span>
                        </a>
                        <a href="">
                          <span class="badge rounded-pill text-bg-secondary">Management</span>
                        </a>
                        <a href="">
                          <span class="badge rounded-pill text-bg-danger">Presentation</span>
                        </a>
                      </div>
                    </div>
                    <!-- Comment&Like section -->
                    <button class="btn like-button my-1" type="button">
                      <i class="bi bi-heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                      </i>
                      <span class="like-count">0</span>
                    </button>
                    <form class="comment-form">
                      <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                      <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                    <!--/ Comment&Like section -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--! First of right -->
          <div class="col ">
            <div class="col shadow-sm">
              <div class="row no-gutters">
                <div class="col-6">
                  <img src="image/metting.png" class="card-img my-xl-5" alt="Image">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <small class="text-primary">Phoenix Baker • 1 Jan 2023</small>
                    <h5 class="card-title ">Migrating to Linear 101</h5>
                    <p class="card-text">Linear helps streamline software projects, sprints, tasks, and bug tracking.
                      Here’s how to get...</p>
                    <div class="d-flex justify-content-lg-start align-items-center">
                      <div class="bbtn">
                        <a href="">
                          <span class="badge rounded-pill text-bg-success ">Design</span>
                        </a>
                        <a href="">
                          <span class="badge rounded-pill text-bg-secondary">Research</span>
                        </a>
                      </div>
                    </div>
                    <!-- Comment&Like section -->
                    <button class="btn like-button my-1" type="button">
                      <i class="bi bi-heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                      </i>
                      <span class="like-count">0</span>
                    </button>

                    <form class="comment-form">
                      <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                      <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                    <!--/ Comment&Like section -->
                  </div>
                </div>
              </div>
              <!--! Second of right -->
              <div class="col my-4">
                <div class=" row no-gutters">
                  <div class="col">
                    <img src="image/setup.png" class="card-img my-xl-5 mx-1" alt="Image">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <small class="text-primary  my-lg-4">Lana Steiner • 1 Jan 2023</small>

                      <h5 class="card-title my-2">Building your API Stack</h5>
                      <p class="card-text">The rise of RESTful APIs has been met by a rise in tools for creating,
                        testing,
                        and manag...</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="bbtn">
                          <a href="">
                            <span class="badge rounded-pill text-bg-success ">Design</span>
                          </a>
                          <a href="">
                            <span class="badge rounded-pill text-bg-secondary">Research</span>
                          </a>
                        </div>
                      </div>
                      <!-- Comment&Like section -->
                      <button class="btn like-button my-1" type="button">
                        <i class="bi bi-heart">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                          </svg>
                        </i>
                        <span class="like-count">0</span>
                      </button>

                      <form class="comment-form">
                        <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                      </form>
                      <!--/ Comment&Like section -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--* The last -->
          <div class="container my-2">
            <div class="shadow">
              <div class="row">
                <div class="row col-11 offset">
                  <div class="my-3">
                    <div class="row no-gutters">
                      <div class="col-md-6">
                        <img src="image/climate.png" class="card-img mx-2 rounded" alt="Image">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <small class="text-primary mt-2 mx-1">Sunday, 1 Jan 2023</small>

                          <h5 class="card-header">Grid system for better Design User Interface</h5>
                          <p class="card-text mx-2">A grid system is a design tool used to arrange content on a webpage.
                            It is
                            a
                            series of vertical and horizontal lines that create a matrix of intersecting points, which
                            can
                            be
                            used to align and organize page elements. Grid systems are used to create a consistent look
                            and
                            feel
                            across a website, and can help to make the layout more visually appealing and easier to
                            navigate.
                          </p>
                        </div>
                        <!-- Comment&Like section -->
                        <button class="btn like-button my-1" type="button">
                          <i class="bi bi-heart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                          </i>
                          <span class="like-count">0</span>
                        </button>

                        <form class="comment-form">
                          <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                          <button type="submit" class="btn btn-primary my-2">Submit</button>
                        </form>
                        <!--/ Comment&Like section -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!--*/ Recent blog posts -->

  <!--* All blog posts -->
  <main>

    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <h5 class="mb-4 ">All blog posts</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- First card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/Mountens.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">Bill Walsh leadership lessons</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl
                  winning
                  Dynasty?</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-primary ">Leadership</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-secondary">Management</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Presentation</span>
                    </a>
                  </div>
                </div>
                <!--/ Comment&Like section -->
                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>

                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!--/ First card -->

          <!-- Second card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/Bord.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">PM mental models</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Mental models are simple expressions of complex processes or relationships.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-primary ">Product</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-secondary">Research</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Frameworks</span>
                    </a>
                  </div>
                </div>
                <!--/ Comment&Like section -->
                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>
                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>

                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!--/ Second card -->
          <!-- Third card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/Screen.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">What is Wireframing?</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Introduction to Wireframing and its Principles. Learn from the best in the
                  industry.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-primary ">Design</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-secondary">Research</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Presentation</span>
                    </a>
                  </div>
                </div>
                <!--/ Comment&Like section -->
                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>

                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!-- /Third card -->

          <!-- Fourth card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/person.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">How collaboration makes us better</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Collaboration can make our teams stronger, and our individual designs better.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-primary ">Design</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-secondary">Research</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Presentation</span>
                    </a>
                  </div>
                </div>
                <!--/ Comment&Like section -->

                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>

                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!--/ Fourth card -->

          <!-- Fifth card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/Mac.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">Our top 10 Javascript frameworks to use</h5>
              </div>
              <div class="card-body">
                <p class="card-text">JavaScript frameworks make development easy with extensive features and
                  functionalities.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-success">Software Development</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Tool</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Saas</span>
                    </a>
                  </div>
                </div>
                <!--/ Comment&Like section -->
                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>

                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!--/ Fifth card -->

          <!-- Sixth card -->
          <div class="col">
            <div class="card shadow-sm">
              <img src="image/Mic.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
              <small class="text-primary mt-2 mx-2">Sunday , 1 Jan 2023</small>
              <div class="card-header-tabs mx-2">
                <h5 class="card-text">Podcast: Creating a better CX Community</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Starting a community doesn’t need to be complicated, but how do you get
                  started?
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="bbtn">
                    <a href="">
                      <span class="badge rounded-pill text-bg-primary ">Podcasts</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-secondary">Customer Success</span>
                    </a>
                    <a href="">
                      <span class="badge rounded-pill text-bg-danger">Presentation</span>
                    </a>
                  </div>
                </div>
                <!-- Comment&Like section -->
                <button class="btn like-button my-1" type="button">
                  <i class="bi bi-heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                  </i>
                  <span class="like-count">0</span>
                </button>

                <form class="comment-form">
                  <input type="text" class="form-control" id="comment-input" placeholder="Enter your comment...">
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <!--/ Comment&Like section -->
              </div>
            </div>
          </div>
          <!--/ Sixth card -->

  </main>
  <!--*/ All blog posts -->

<?php
require_once("footer.php");
?>
</body>

</html>