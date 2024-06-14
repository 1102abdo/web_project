<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/profile.css">
    <!-- <script src="profile.js" ></script> -->
    <title>Bootstrap demo</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link rel="stylesheet" href="styles/profile.css">
  <link href="styles/bootstrap.min.css" rel="stylesheet">


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

    <header class=" p-3 mb-3 border-bottom">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Your profile</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mx-5" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="Blog Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="profile.php">Profile</a>
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
                      <img src="profile pic/2.jpg" alt="" class="w-100 h-100">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <h5 class="fs-5 mb-0 fw-semibold">Mohamed attia</h5>
                  <p class="mb-0 fs-4">web developer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 order-last">
              <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                <li class="position-relative">
                  <a class="text-white d-flex align-items-center justify-content-center bg-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" width="30" height="30">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="position-relative">
                  <a class="text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="position-relative">
                  <a class="text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                    <i class="fa fa-dribbble"></i>
                  </a>
                </li>
                <li class="position-relative">
                  <a class="text-white bg-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle " href="javascript:void(0)">
                    <i class="fa fa-youtube"></i>
                  </a>
                </li>
                <li><button class="btn btn-primary">Add To Story</button></li>
              </ul>
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
            <li class="nav-item" role="presentation">
              <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false" tabindex="-1">
                <i class="fa fa-photo me-2 fs-6"></i>
                <span class="d-none d-md-block">Gallery</span> 
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
          <form>
            <div class="mb-3">
              <label for="postText" class="form-label">Post Text</label>
              <textarea class="form-control" id="postText" rows="3" placeholder="What's on your mind?"></textarea>
            </div>
            <div class="mb-3">
              <label for="postImage" class="form-label">Upload Image</label>
              <input class="form-control" type="file" id="postImage">
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
          </form>
        </div>
      <div class="tab-content" id="pills-tabContent">
    
        <div class="tab-pane fade show active" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">
          <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
            <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Gallery <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">12</span></h3>
            <form class="position-relative">
              <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Friends">
              <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
            </form>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/4.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Isuava wakceajo fe.jpg</h6>
                      <span class="text fs-2">Wed, Dec 14, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo fe.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/16.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Ip docmowe vemremrif.jpg</h6>
                      <span class="text fs-2">Wed, Dec 14, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Ip docmowe vemremrif.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/11.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Duan cosudos utaku.jpg</h6>
                      <span class="text- fs-2">Wed, Dec 14, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Duan cosudos utaku.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/10.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Fu netbuv oggu.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Fu netbuv oggu.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/2.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Di sekog do.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Di sekog do.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/5.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Lo jogu camhiisi.jpg</h6>
                      <span class="text fs-2">Thu, Dec 15, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Lo jogu camhiisi.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/6.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Orewac huosazud robuf.jpg</h6>
                      <span class="text fs-2">Fri, Dec 16, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Orewac huosazud robuf.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/17.jpeg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Nira biolaizo tuzi.jpg</h6>
                      <span class="text fs-2">Sat, Dec 17, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Nira biolaizo tuzi.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/18.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Peri metu ejvu.jpg</h6>
                      <span class="text fs-2">Sun, Dec 18, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Peri metu ejvu.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/19.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Vurnohot tajraje isusufuj.jpg</h6>
                      <span class="text fs-2">Mon, Dec 19, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Vurnohot tajraje isusufuj.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/13.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Juc oz ma.jpg</h6>
                      <span class="text fs-2">Tue, Dec 20, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Juc oz ma.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card hover-img overflow-hidden rounded-2">
                <div class="card-body p-0">
                  <img src="profile pic/20.jpg" alt="" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="fw-semibold mb-0 fs-4">Povipvez marjelliz zuuva.jpg</h6>
                      <span class="text fs-2">Wed, Dec 21, 2023</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li><a class="dropdown-item" href="javascript:void(0)">Povipvez marjelliz zuuva.jpg</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="scripts/color-modes.js"></script>
    <!-- <script src="scripts/bootstrap.bundle.min.js"></script> -->

  </body>
</html>