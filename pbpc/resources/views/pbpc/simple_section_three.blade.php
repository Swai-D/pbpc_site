<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Practical Based Popurum Community</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>
<body class="single is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="/">PBPC Beyond Reality</a></h1>
        <nav class="links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Post</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="#">
                        <input type="text" name="query" placeholder="Search" />
                    </form>
                </li>
                <li class="menu">
                    <a class="fa-bars" href="#menu">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <section>
            <form class="search" method="get" action="#">
                <input type="text" name="query" placeholder="Search" />
            </form>
        </section>

        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Wisdom</h3>
                        <p>Kownledge may be power but wisdom is unmatched</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Courage</h3>
                        <p>it feels too far until your there.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Noise</h3>
                        <p>Discriptive forc    <ul class="links">
                <li>
                    <a href="/">
                        <h3>Wisdom</h3>
                        <p>Kownledge may be power but wisdom is unmatched</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('pbpc/courage')}}">
                        <h3>Courage</h3>
                        <p>it feels too far until your there.</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('pbpc/noise')}}">
                        <h3>Noise</h3>
                        <p>Discriptive forces comes in all shapes and size</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('pbpc/book')}}">
                        <h3>Enlightment</h3>
                        <p>insight is more valuable than hindsight</p>
                    </a>
                </li>
            </ul>es comes in all shapes and size</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Enlightment</h3>
                        <p>insight is more valuable than hindsight</p>
                    </a>
                </li>
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="#" class="button large fit">Log In</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{url('pbpc/simple_section_three')}}">it feels to far until your there</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-22">{{date('M D,Y')}}</time>
                    <a href="{{url('simple_section_three')}}" class="author"><span class="name">davy swai</span><img src="#" alt="" /></a>
                </div>
            </header>
            <a href="{{url('pbpc/simple_section_three')}}" class="image featured"><img src="{{asset('images/climbing1.jpg')}}" alt="" /></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam architecto, dignissimos eius esse eveniet ex laboriosam, molestias mollitia nulla obcaecati, officia perspiciatis quibusdam reiciendis reprehenderit sequi tempore ullam voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium esse eveniet fugit ipsam labore nulla odio quas sequi veniam vitae. Animi distinctio facere fugiat perferendis possimus quam quibusdam voluptatum? Est. </p>
            <footer>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

    </div>

    <!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Blacknative. Design: <a href="http://html5up.net">support</a>. Images: <a href="http://unsplash.com">explorer</a>.</p>
    </section>

</div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
