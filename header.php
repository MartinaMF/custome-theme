<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top lcc-nav-background">
                    <a class="navbar-brand" href="#"><h3> <span class="lcc-brand-f">LIVE CHAT</span> 
                       <br><span class="lcc-brand-s">SOFTWARE</span></h3></a>
                       <div class="separator"></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if(is_home()) echo 'active'?>">
                      <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if(is_page('Features')) echo 'active'?>">
                      <a class="nav-link" href="/live-chat-features">Features</a>
                    </li>
                    <li class="nav-item <?php if(is_page('Our Pricing')) echo 'active'?>">
                      <a class="nav-link" href="/live-chat-pricing">Pricing</a>
                    </li>
                    <li class="nav-item <?php if(is_page('Live Chat E-Commerce Solution')) echo 'active'?>">
                        <a class="nav-link" href="/live-chat-e-commerce-solution">Solutions</a>
                      </li>
                      <li class="nav-item <?php if(is_page('FAQ')) echo 'active'?>">
                          <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item <?php if(is_page('Comparison')) echo 'active'?>">
                            <a class="nav-link" href="/live-chat-software-review">Comparison</a>
                          </li>
                  </ul>
                  <ul class="navbar-nav float-right">
                      <div class="vl"></div>
                        <li class="nav-item download">
                          <a class="nav-link" href="#">Download <span class="sr-only">(current)</span></a>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item gethelp">
                            <a class="nav-link" href="#">Get Help <span class="sr-only">(current)</span></a>
                        </li>
                </ul>
                </div>
              </nav> 
              <!-- end nav -->
            