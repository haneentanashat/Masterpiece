@extends('layout.main')
@section('title')
    Register Page
@endsection
@section('content')

<script>
    function changeImage(element) {
  
      var main_prodcut_image = document.getElementById('main_product_image');
      main_prodcut_image.src = element.src;
  
    }
  </script>
  
  <style>
    .card {
      border: none;
      overflow: hidden
    }
  
    .thumbnail_images ul {
      list-style: none;
      justify-content: center;
      display: flex;
      align-items: center;
      margin-top: 10px
    }
  
    .thumbnail_images ul li {
      margin: 5px;
      padding: 10px;
      border: 2px solid #eee;
      cursor: pointer;
      transition: all 0.5s
    }
  
    .thumbnail_images ul li:hover {
      border: 2px solid #000
    }
  
    .main_image {
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid #eee;
      height: 400px;
      width: 100%;
      overflow: hidden
    }
  
    .content p {
      font-size: 12px
    }
  
    .ratings span {
      font-size: 14px;
      margin-left: 12px
    }
  
    .right-side {
      position: relative
    }
  </style>
  <section class="single-page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>
            
          </h2>
          <ol class="breadcrumb header-bradcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
  
            <li class="breadcrumb-item active" aria-current="page"></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  
  <!-- blog details part start -->
  <section class="blog-details section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <article class="post">
            <div class="container mt-5 mb-5">
  
             
  
                    <div class="card">
                      <div class="row g-0 mb-5">
                        <div class="col-md-6 border-end mb-5">
                          <div class="d-flex flex-column justify-content-center">
                            <div class="main_image">
                              <img src="../dashboard/img/l1.png" id="main_product_image" width="600" style="height: 20rem;">
                            </div>
                            <div class="thumbnail_images">
                              <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="../dashboard/img/l1.png" width="100" style="height: 5rem;"></li>
                                <li><img onclick="changeImage(this)" src="../dashboard/img/l2.png" width="100" style="height: 5rem;"></li>
                                <li><img onclick="changeImage(this)" src="../dashboard/img/l3.jpg" width="100" style="height: 5rem;"></li>
                           
                              </ul>
                            </div>
                          </div>
                        </div>
                       
                        </div>
                      </div>
                    </div>
  
  
  
                    <!-- Comments -->
  
                    <div class="post-content mt-5">
  
  
                      <h3>Comments</h3>
                      <ul class="comment-list">
                        <!-- comment list -->
                       
                          <li class="comment-list-item">
                            <div class="comment-list-item-image">
                              <img loading="lazy" src="img/blog/profile.png" alt="comment-img" width="40" height="40">
                            </div>
                            <div class="comment-list-item-content">
                              <h5></h5>
                              <p></p>
                              <h6></h6>
                            </div>
                          </li>
                        
                      </ul>
                        <h3>Leave A Comment</h3>
                        <div class="alert alert-warning" role="alert">
                          Login To Leave A Comment
                        </div>
                        <!-- Comment Form -->
                        <form action="add_comment.php" class="comment-form"  method="post">
                          <input type="hidden" name="p_id" value="">
                          <input type="hidden" name="p_sub" value="">
                          <input type="hidden" name="p_name" value="">
                          <input type="hidden" name="u_id" value="">
                          <input type="hidden" name="u_name" value="">
                          <div class="row">
                            <div class="col-lg-12 col-md-12">
                              <textarea class="form-control" name="comment" id="comment" rows="3" disabled></textarea>
                            </div>
                          </div>
                          <button type="submit" value="send" class="btn btn-main" disabled>Comment</button>
                        </form>
                  
                    </div>
                  
                    
  
  
  
          </article>
        </div>
  
      </div>
    </div>
  </section>
  @endsection