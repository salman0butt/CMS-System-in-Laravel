@include('includes.front_header')
<body>

<!-- Navigation -->
@include('includes.front_nav')

<!-- Page Content -->
<div class="container">

    <div class="row">

  @yield('content')

        <!-- Blog Sidebar Widgets Column -->
      @include('includes.front_sidebar')

    </div>
    <!-- /.row -->

    <hr>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{ $posts->render() }}
        </div>
    </div>
    <!-- Footer -->
    < footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
