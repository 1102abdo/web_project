<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="scripts/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Blog</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="styles/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/Blog home.css">
</head>

<body class="bg-body">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>
  <!--? Option Mode -->
  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>
  <!--?/ Option Mode -->

  <!--? Nav -->
  <header class=" p-3 mb-3 border-bottom">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="Blog Home.html">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="Blog Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <div class="d-grid gap-2 row-gap-1">
              <form class="form-inline mr-auto">
                <a href="login.php" class="btn btn-outline-primary me-2" role="button">Sign in</a>
                <a href="register.php" class="btn btn-outline-success" role="button">Register</a>
              </form>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
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
                  <img src="image/Image1.png" class="card-img rounded First" alt="Image"
                    style="justify-content:center; height: 100%;">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-heart" viewBox="0 0 16 16">
                          <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-heart" viewBox="0 0 16 16">
                          <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                              d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-heart" viewBox="0 0 16 16">
                              <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                          </i>
                          <span class="like-count">0</span>
                        </button>

                        <form class="comment-form">
                          <input type="text" class="form-control" id="comment-input"
                            placeholder="Enter your comment...">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-heart" viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1.176-.17C12.72-3.042 23.333 4.867 8 15" />
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

  <footer class="text-body-secondary py-5">
    <div class="container">
      <p class="float-end mb-5">
        <a href="#" style="text-decoration: none;">
          <button type="button" class="btn btn-outline-warning">Back to top</button>
        </a>
      </p>
    </div>
  </footer>

  <script src="scripts/Like.js"></script>
  <script src="scripts/bootstrap.bundle.min.js"></script>
</body>

</html>