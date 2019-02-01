<?php

use yii\helpers\Html;
?>

<div id="news-page">

    <section class="blog-list">
        <div class="container">
            <div class="main-head-section"><h2>Our News</h2><small>Company News posts</small></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-box">
                        <div class="image-sec">
                            <img src="<?= Yii::$app->homeUrl; ?>images/blog/blog1.jpg" alt="Professional lorem ipsum generator orem for typographers" class="img-fluid">
                            <div class="blog-date">14 Jan 2019</div>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title">Professional lorem ipsum generator orem for typographers</h4>
                            <p>It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the</p>
                            <?= Html::a('Read More', ['/site/news-details', 'title' => 'news-details'], ['class' => 'read-more']) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-box">
                        <div class="image-sec">
                            <img src="<?= Yii::$app->homeUrl; ?>images/blog/blog1.jpg" alt="Professional lorem ipsum generator orem for typographers" class="img-fluid">
                            <div class="blog-date">14 Jan 2019</div>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title">Professional lorem ipsum generator orem for typographers</h4>
                            <p>It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the</p>
                            <?= Html::a('Read More', ['/site/news-details', 'title' => 'news-details'], ['class' => 'read-more']) ?>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-box">
                        <div class="image-sec">
                            <img src="<?= Yii::$app->homeUrl; ?>images/blog/blog1.jpg" alt="Professional lorem ipsum generator orem for typographers" class="img-fluid">
                            <div class="blog-date">14 Jan 2019</div>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title">Professional lorem ipsum generator orem for typographers</h4>
                            <p>It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the</p>
                            <?= Html::a('Read More', ['/site/news-details', 'title' => 'news-details'], ['class' => 'read-more']) ?>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>