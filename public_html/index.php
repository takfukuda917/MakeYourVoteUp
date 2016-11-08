<?php include 'partials/header.php';?>

    <!-- HERO SECTION-->
    <section class="hero-section">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <video controls>
                        <source src="vid/vid1.mp4" type="video/mp4">
                        <p>Your browser does not support HTML5 video.</p>
                    </video>

                </li>
                <li>
                    <video controls>
                        <source src="vid/vid2.mp4" type="video/mp4">
                        <p>Your browser does not support HTML5 video.</p>
                    </video>
                </li>
                <li>
                    <video controls>
                        <source src="vid/vid3.mp4" type="video/mp4">
                        <p>Your browser does not support HTML5 video.</p>
                    </video>
                </li>
                <li>
                    <video controls>
                        <source src="vid/vid4.mp4" type="video/mp4">
                        <p>Your browser does not support HTML5 video.</p>
                    </video>
                </li>
            </ul>
        </div>
    </section>

    <main class="index-main">
        <!-- ABOUT SECTION -->
        <section class="about-section">
            <div class="row">
                <div class="about-content small-12 medium-6 large-6 columns">
                    <h1>about make your vote up</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing lorem Ipsum passages, and more recently with desktop publishing software like Aldus.</p>
                    <a href="compare.php">compare parties</a>
                </div>
                <div class="mobile-hidden medium-6 large-6 columns">
                    <img src="img/index/about.jpeg" alt="About Image" />
                </div>
            </div>
        </section>

        <!-- PARTIES LINKS SECTION -->
        <section class="parties-links-section">
            <h1>political parties</h1>
            <div class="row">
                <div class="small-12 medium-6 large-6 columns">
                    <figure class="snip1091 liberal link-container">
                        <img src="img/index/liberal.png" alt="Parties Links" />
                        <figcaption>
                            <h2>liberal party of canada</h2>
                        </figcaption>
                        <a href="liberal.php"></a>
                    </figure>
                </div>
                <div class="small-12 medium-6 large-6 columns">
                    <figure class="snip1091 con link-container">
                        <img src="img/index/cons.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>conservative party of canada</h2>
                        </figcaption>
                        <a href="conservative.php"></a>
                    </figure>
                </div>
                <div class="small-12 medium-6 large-6 columns">
                    <figure class="snip1091 green liberal link-container">
                        <img src="img/index/green.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>green party</h2>
                        </figcaption>
                        <a href="green.php"></a>
                    </figure>
                </div>
                <div class="small-12 medium-6 large-6 columns">
                    <figure class="snip1091 ndp liberal link-container">
                        <img src="img/index/ndp.jpg" alt="Parties Links" />
                        <figcaption>
                            <h2>new democratic party</h2>
                        </figcaption>
                        <a href="ndp.php"></a>
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/footer.php';?>
