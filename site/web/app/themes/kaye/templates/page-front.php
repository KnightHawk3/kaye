<?php
/*
Template Name: Front Page
Template Post Type: page
*/
namespace Roots\Sage;
?>

<section class="jumbotron carou-hero text-center">
  <div class="container jumbo-header-text">
    <h1 class="jumbotron-heading">Kaye West</h1>
    <p class="lead text-muted">Kaye West Petticoats Australia has been providing Australia's bridal industry with quality petticoats for over 10 years.</p>
    <p>
      <a href="#" class="btn btn-primary">Contact</a>
    </p>
  </div>
  <div id="carouselExampleIndicators" class="jumbo-carousel carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="http://lorempixel.com/1240/720/sports" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://lorempixel.com/1240/720/city" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="http://lorempixel.com/1240/720/people" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
