<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Practical Based Popurum Community</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/png">
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="/">PBPC Beyond Reality</a></h1>
        <nav class="links border-bottom-2">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Post</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{url('pbpc/contact')}}">Contact Us</a></li>
                

            </ul>

        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="#">
                        <input type="text" name="query" placeholder="Search">
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
            </ul>
        </section>


        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="{{url('login')}}" class="button large fit">Log In</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="{{route('register')}}" class="button large fit">Register</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                @foreach($post_1 as $p)
                <div class="title">
                    <h2><a href="pbpc/simple_header">{{$p->Heading}}</a></h2>
                    <p>{{$p->Caption}}</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">{{$p->created_at->diffForHumans()}}</time>
                    <a href="#" class="author"><span class="name">{{$p->AuthorName}}</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="pbpc/simple_header" class="image featured"><img src="{{asset('uploads/avatar/'.$p -> Photo)}}"></a>
            <p>{{$p->Content}}</p>
            <footer>
                <ul class="actions">
                    <li><a href="pbpc/simple_header" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="pbpc/simple_header">General</a></li>
                    <li><a href="/likes/{{$p->id}}" class="icon solid fa-heart">28</a></li>
                    <li><a href="/Comments/{{$p->id}}" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
            @endforeach
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                 @foreach($post_2 as $p)
                <div class="title">
                    <h2><a href="{{url('pbpc/simple_section_two')}}">{{$p->Heading}}</a></h2>
                    <p>{{$p->Caption}}</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-25">{{$p->created_at->diffForHumans()}}</time>
                    <a href="#" class="author"><span class="name">{{$p->AuthorName}}</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="{{url('pbpc/simple_section_two')}}" class="image featured"><img src="{{asset('uploads/avatar/'.$p->Photo)}}" alt="" /></a>
            <p>{{$p->Content}}</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{url('pbpc/simple_section_two')}}" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="/likes/{{$p->id}}" class="icon solid fa-heart">28</a></li>
                    <li><a href="/Comments/{{$p->id}}" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
             @endforeach
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{url('pbpc/simple_section_three')}}">it feels to far until your there</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-22">{{date('M D,Y')}}</time>
                    <a href="{{url('simple_section_three')}}" class="author"><span class="name">Davy Swai</span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="{{url('pbpc/simple_section_three')}}" class="image featured"><img src="{{asset('images/climbing.jpg')}}" alt="" /></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{url('pbpc/simple_section_three')}}" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

        <!-- Post -->


        <!-- Pagination -->
        <ul class="actions pagination">
            <li><a href="" class="disabled button large previous">Previous Page</a></li>
            <li><a href="#" class="button large next">Next Page</a></li>
        </ul>

    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="{{asset('images/logo2.jpg')}}" alt="" /></a>
            <header>
                <h2>wisdom</h2>
                <p>Kownledge may be power but wisdom is unmatched<a href="http://html5up.net"></a></p>
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('pbpc/courage')}}">Courage</a></h3>
                        <time class="published" datetime="2019-10-20">{{date('M D,Y')}}</time>
                        <a href="{{url('pbpc/courage')}}" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('pbpc/courage')}}" class="image"><img src="{{asset('images/obstacle.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('pbpc/noise')}}">Noise</a></h3>
                        <time class="published" datetime="2015-10-19">{{date('M D,Y')}}</time>
                        <a href="{{url('pbpc/noise')}}" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('pbpc/noise')}}" class="image"><img src="{{asset('images/bell.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('pbpc/book')}}">Enlightment</a></h3>
                        <time class="published" datetime="2015-10-18">{{date('M D,Y')}}</time>
                        <a href="{{url('pbpc/book')}}" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('pbpc/book')}}" class="image"><img src="{{asset('images/book.jpg')}}" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="{{url('pbpc/stress')}}">Life without purpose</a></h3>
                        <time class="published" datetime="2015-10-17">{{date('M D,Y')}}</time>
                        <a href="{{url('pbpc/stress')}}" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="{{url('pbpc/stress')}}" class="image"><img src="{{asset('images/meaningless.jpg')}}" alt="" /></a>
                </article>

            </div>
        </section>

        <!-- Posts List -->
        <section>
            <ul class="posts">
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('pbpc/knowing')}}">knowing where your going seems not enough now days</a></h3>
                            <time class="published" datetime="2015-10-20">{{date('M D,Y')}}</time>
                        </header>
                        <a href="{{url('pbpc/knowing')}}" class="image"><img src="{{asset('images/knowing.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('pbpc/dry')}}">life without green</a></h3>
                            <time class="published" datetime="2015-10-15">{{date('M D,Y')}}</time>
                        </header>
                        <a href="{{url('pbpc/dry')}}" class="image"><img src="{{asset('images/dry.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('pbpc/illusion')}}">Education is mis-interpreted now days</a></h3>
                            <time class="published" datetime="2015-10-10">{{date('M D,Y')}}</time>
                        </header>
                        <a href="{{url('pbpc/illusion')}}" class="image"><img src="{{asset('images/illusion.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('pbpc/magic')}}">the magic of doing what you love</a></h3>
                            <time class="published" datetime="2015-10-08">{{date('M D,Y')}}</time>
                        </header>
                        <a href="{{url('pbpc/magic')}}" class="image"><img src="{{asset('images/magic.jpg')}}" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="{{url('pbpc/why')}}">starting with why?</a></h3>
                            <time class="published" datetime="2015-10-06">{{date('M D,Y')}}</time>
                        </header>
                        <a href="{{url('pbpc/why')}}" class="image"><img src="{{asset('images/why.jpg')}}" alt="" /></a>
                    </article>
                </li>
            </ul>
        </section>

        <!-- About -->
        <section class="blurb">
            <h2>About</h2>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
            <ul class="actions">
                <li><a href="#" class="button">Learn More</a></li>
            </ul>
        </section>

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
