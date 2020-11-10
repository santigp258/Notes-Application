<footer class="site-footer">

    <div class="container-footer clearfix">

        <div>
            <h5>About <span>App</span></h5>

            <p> The function of the application is an interface for saving notes.
            </p>
        </div>
        <!--footer information-->
        <div>
            <h5>Technologies <span>used</span></h5>
            <p>The following technologies were used to create this application:
                <span>HTML5 </span>, CSS3, <span>Bootstrap4</span>, JavaScript, <span>PHP</span> jQuery & <span>MySQL</span>.
            </p>

        </div>
        <div class="menu">
            <h5>Git<span>Hub</span> repository</h5>
            <nav class="social-network">
                <a href="https://github.com/santigp258" target="_blank"><i class="fab fa-github"></i></i></a>
            </nav>
        </div>

    </div>
    <!--container-footer-->

    <p class="copyright">
        Note App 2020 &copy;
    </p>

</footer>
<!--SCRIPTS-->
<script src="jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/identifier.js"></script>
<?php
$archive = basename($_SERVER['PHP_SELF']);
$pag = str_replace(".php", "", $archive);
if ($pag == 'index' || $pag == 'edit') {
    echo '<script src="js/app.js"></script>';
}
?>

</body>

</html>