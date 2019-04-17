@extends('layouts.app')

@section('content')
<div class="inner-page-wrapper blog-details-wraper">
    <div class="container">
    <div class="row">
     <div class=" blog-page-details"> 
      <!-- Start single blog -->
      <div class="col-md-8 col-sm-7"> 
        <!-- single-blog start -->
        <article class="blog-post-wrapper">
          <div class="blog-banner"> <a href="javascript:void(0)" class="blog-images"> <img src="images/blog1.jpg" alt=""> </a>
            <div class="blog-content">
              <a href="javascript:void(0)">
              <h4>The standard chunk of Lorem Ipsum used since</h4>
              </a>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <blockquote>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </blockquote>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
            </div>
          </div>
        </article>
        <div class="clear"></div>
        <div class="single-post-comments">
          {{-- <div class="comments-area">
            <div class="comments-heading">
              <h3>4 comments</h3>
            </div>
            <div class="comments-list">
              <ul>
                <li class="threaded-comments">
                  <div class="comments-details">
                    <div class="comments-list-img"> <img src="images/comment-img.jpg" alt=""> </div>
                    <div class="comments-content-wrap"> <span> <b><a href="javascript:void(0)">demo</a></b> Post author <span class="post-time">June 6, 2017</span> <a href="javascript:void(0)">Reply</a> </span>
                      <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="comments-details">
                    <div class="comments-list-img"> <img src="images/comment-img.jpg" alt=""> </div>
                    <div class="comments-content-wrap"> <span> <b><a href="javascript:void(0)">admin</a></b> Post author <span class="post-time">June 6, 2017</span> <a href="javascript:void(0)">Reply</a> </span>
                      <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                    </div>
                  </div>
                </li>
                <li class="threaded-comments">
                  <div class="comments-details">
                    <div class="comments-list-img"> <img src="images/comment-img.jpg" alt=""> </div>
                    <div class="comments-content-wrap"> <span> <b><a href="javascript:void(0)">demo</a></b> Post author <span class="post-time">June 11, 2017</span> <a href="javascript:void(0)">Reply</a> </span>
                      <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="comments-details">
                    <div class="comments-list-img"> <img src="images/comment-img.jpg" alt="" data-popupalt-original-title="null" title=""> </div>
                    <div class="comments-content-wrap"> <span> <b><a href="javascript:void(0)">admin</a></b> Post author <span class="post-time">June 6, 2017</span> <a href="javascript:void(0)">Reply</a> </span>
                      <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> --}}
          {{-- <div class="comment-respond">
            <h3 class="comment-reply-title">Leave a Reply </h3>
            <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
            <form action="javascript:void(0)">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <p>Name *</p>
                  <input type="text">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <p>Email *</p>
                  <input type="email">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <p>Phone</p>
                  <input type="text">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                  <p>Message</p>
                  <textarea id="message-box" cols="30" rows="10"></textarea>
                  <input class="add-btn contact-btn" value="Post Comment" type="submit">
                </div>
              </div>
            </form>
          </div> --}}
        </div>
        <!-- single-blog end --> 
      </div>
      <!-- End main column -->
      <div class="col-md-4 col-sm-5">
        <div class="left-head-blog">
          <div class="left-blog-page"> 
            <!-- search option start -->
            <form action="javascript:void(0)">
              <div class="blog-search-option">
                <input placeholder="Chercher..." type="text">
                <button class="button" type="submit"> <i class="fa fa-search"></i> </button>
              </div>
            </form>
            <!-- search option end --> 
          </div>
          <div class="left-blog-page"> 
            <!-- recent start -->
            <div class="left-blog">
              <h4>post récent</h4>
              <div class="recent-post"> 
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img"> <a href="javascript:void(0)"> <img src="images/blog1.jpg" alt=""> </a> </div>
                  <div class="pst-content">
                    <p><a href="javascript:void(0)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</a></p>
                  </div>
                </div>
                <!-- End single post --> 
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img"> <a href="javascript:void(0)"> <img src="images/blog2.jpg" alt=""> </a> </div>
                  <div class="pst-content">
                    <p><a href="javascript:void(0)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</a></p>
                  </div>
                </div>
                <!-- End single post --> 
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img"> <a href="javascript:void(0)"> <img src="images/blog3.jpg" alt=""> </a> </div>
                  <div class="pst-content">
                    <p><a href="javascript:void(0)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</a></p>
                  </div>
                </div>
                <!-- End single post --> 
                <!-- start single post -->
                <div class="recent-single-post">
                  <div class="post-img"> <a href="javascript:void(0)"> <img src="images/blog4.jpg" alt=""> </a> </div>
                  <div class="pst-content">
                    <p><a href="javascript:void(0)">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</a></p>
                  </div>
                </div>
                <!-- End single post --> 
              </div>
            </div>
            <!-- recent end --> 
          </div>
          {{-- <div class="left-blog-page">
            <div class="left-blog">
              <h4>categories</h4>
              <ul>
                <li> <a href="javascript:void(0)">Residential</a> </li>
                <li> <a href="javascript:void(0)">Commercial</a> </li>
                <li> <a href="javascript:void(0)">Industrial</a> </li>
                <li> <a href="javascript:void(0)">Electric Repair</a> </li>
                <li> <a href="javascript:void(0)">Electric Installation</a> </li>
                <li> <a href="javascript:void(0)">Electric Maintenence</a> </li>
                <li> <a href="javascript:void(0)">Inverter Repair</a> </li>
              </ul>
            </div>
          </div>
          <div class="left-blog-page">
            <div class="left-blog">
              <h4>archive</h4>
              <ul>
                <li> <a href="javascript:void(0)">19 Dec 2017</a> </li>
                <li> <a href="javascript:void(0)">11 Dec 2017</a> </li>
                <li> <a href="javascript:void(0)">13 Nov 2017</a> </li>
                <li> <a href="javascript:void(0)">19 Nov 2017</a> </li>
                <li> <a href="javascript:void(0)">09 Fabruary 2017</a> </li>
              </ul>
            </div>
          </div>
          <div class="left-blog-page">
            <div class="left-tags blog-tags">
              <div class="popular-tag left-side-tags left-blog">
                <h4>popular tags</h4>
                <ul>
                  <li> <a href="javascript:void(0)">Residential</a> </li>
                  <li> <a href="javascript:void(0)">Commercial</a> </li>
                  <li> <a href="javascript:void(0)">Industrial</a> </li>
                  <li> <a href="javascript:void(0)">Repair</a> </li>
                  <li> <a href="javascript:void(0)">Maintenence</a> </li>
                  <li> <a href="javascript:void(0)">Installation</a> </li>
                </ul>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      <!-- End left sidebar --> 
    </div>
    </div>
    </div>
@endsection