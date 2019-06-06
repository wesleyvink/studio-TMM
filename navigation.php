<nav>
    <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#opdrachten">opdrachten</a></li>
        <li><a href="#agenda">agenda</a></li>
        <li><a href="#archief">archief</a></li>
    </ul>
</nav>

<div class="content"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

    (function() {

        var documentElem = $(document),
            nav = $('nav'),
            lastScrollTop = 0;

        documentElem.on('scroll', function() {
            var currentScrollTop = $(this).scrollTop();


            if ( currentScrollTop > lastScrollTop ) nav.addClass('hidden');

            else nav.removeClass('hidden');

            lastScrollTop = currentScrollTop;
        });



    })();
</script>