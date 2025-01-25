<?php
$data = include_once 'includes/fetch_api.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Showcase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <!-- Section 1 start -->
    <h1 class="heading text-center mb-4">Communities we manage</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if (!empty($communities)) : ?>
            <?php foreach ($communities as $community) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= $community['image_url'] ?>" class="card-img-top" alt="<?= $community['post_title'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $community['post_title'] ?></h5>
                            <p class="card-text"><?= $community['post_excerpt'] ?></p>
                            <a href="<?= $community['post_url'] ?>" class="btn btn-primary" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No communities found.</p>
        <?php endif; ?>
    </div>
     <!-- Section 1 end -->

    <!-- Carousel section start -->
<h2 class="heading text-center mt-5">Our Services</h2>
<div id="communityCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php if (!empty($communities)) : ?>
            <?php foreach (array_chunk($communities, 3) as $index => $communityGroup) : ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <div class="row-cols-1 row-cols-md-3 d-flex justify-content-center">
                        <?php foreach ($communityGroup as $community) : ?>
                            <div class="card mx-2 mb-4" style="">
                                <img src="<?= $community['image_url'] ?>" class="card-img-top" alt="<?= $community['post_title'] ?>" style="height: 552px; object-fit: cover;">
                                <div class="title-overlay position-absolute w-100 d-flex justify-content-center align-items-center card-body text-center">
                                    <h5 class="card-title text-white"><?= $community['post_title'] ?></h5>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No carousel data found.</p>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#communityCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#communityCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
 <!-- Carousel section end -->
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
