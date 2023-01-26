
<!DOCTYPE html>
<html>
<head>
    <title>How To Create a Portfolio Filter Gallery using HTML CSS & jQuery | Filterable Image Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- Filter Gallery --> 
    <div class="container-fluid filterbox">
        <div class="filter-tabs">
            <div class="filter-sort">
                <div class="navigation">
                    <a href="javascript:void(0)" data-filter="all" class="button active">All</a>
                    <a href="javascript:void(0)" data-filter="Animation" class="button">Animation</a>
                    <a href="javascript:void(0)" data-filter="Branding" class="button">Branding</a>
                    <a href="javascript:void(0)" data-filter="Illustration" class="button">Illustration</a>
                    <a href="javascript:void(0)" data-filter="Mobile" class="button">Mobile</a>
                    <a href="javascript:void(0)" data-filter="Print" class="button">Print</a>
                </div>
            </div>
        </div>
        <div class="main-wrap wrap-inner">
            <div id="content">
                <div class="main-full" id="main">
                    <ol class="content">
                        <li class="team shot-thumbnail Animation">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-1" src="images/b-1.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-1.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Animation">
                          <div class="multi-shot"> 
                                <div class="dribbble-shot with-actions"> 
                                    <div class="dribbble-img">
                                        <a class="dribbble-link">
                                            <picture> 
                                                <img alt="images-2" src="images/b-2.png">
                                            </picture>
                                        </a>
                                        <a class="dribbble-over" href="images/b-2.png" data-lightbox="mygallery" data-title="Dribbble">
                                          <strong class="hover-text">Vicente Font Family</strong>
                                            <span class="icons">
                                                <i class="fa fa-folder" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="dribbble-title">
                                            <h3>Break Maiden 
                                            <span class="m-team">TEAM</span> 
                                            <span class="comment">
                                                <i class="fa fa-folder" aria-hidden="true"></i>14
                                                <i class="fa fa-heart" aria-hidden="true"></i>531
                                            </span>
                                            </h3>
                                        </a>
                                    </div>  
                                </div>  
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Animation">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-3" src="images/b-3.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-3.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>    
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Animation">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-4" src="images/b-4.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-4.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div> 
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Branding">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-5" src="images/b-5.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-5.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>  
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Branding">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-6" src="images/b-6.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-6.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-7" src="images/b-7.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-7.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-8" src="images/b-8.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-8.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Mobile">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-9" src="images/b-9.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-9.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Mobile">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-10" src="images/b-10.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-10.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Print">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-11" src="images/b-11.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-11.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Print">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-12" src="images/b-12.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-12.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>    
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-13" src="images/b-13.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-13.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>   
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-14" src="images/b-14.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-14.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>  
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-15" src="images/b-15.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-15.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>    
                            </div>  
                        </li>
                        <li class="team shot-thumbnail Illustration">
                          <div class="multi-shot">  
                                <div class="dribbble-img">
                                    <a class="dribbble-link">
                                        <picture> 
                                            <img alt="images-16" src="images/b-16.png">
                                        </picture>
                                    </a>
                                    <a class="dribbble-over" href="images/b-16.png" data-lightbox="mygallery" data-title="Dribbble">
                                      <strong class="hover-text">Vicente Font Family</strong>
                                        <span class="icons">
                                            <i class="fa fa-folder" aria-hidden="true"></i>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="dribbble-title">
                                        <h3>Break Maiden 
                                        <span class="m-team">TEAM</span> 
                                        <span class="comment">
                                            <i class="fa fa-folder" aria-hidden="true"></i>14
                                            <i class="fa fa-heart" aria-hidden="true"></i>531
                                        </span>
                                        </h3>
                                    </a>
                                </div>  
                            </div>  
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>    



<script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/script.js"></script>
</body>
</html>

