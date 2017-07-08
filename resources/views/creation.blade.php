

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{{Config::get('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">{{Config::get('app.name')}}</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Features</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">

                <h1 class="cover-heading">{{Config::get('app.name')}} - турнирные таблицы</h1>
                <p class="lead">{{Config::get('app.name')}} - это сайт для создания турнирных таблиц.
                    Создавайте турнирные таблицы, отмечайте победителей, смотрите статистику проведенных
                    матчей.</p>


                <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p>
            </div>


            {{ csrf_token() }}
        </div>
        <div  class="container">

            <form action="/create" method="POST" class="form-signin">
                <div>
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="tournament" class="sr-only">Название турнира</label>
                    <p><input type="text" id="tournament" name="tournament" class="form-control" placeholder="Название турнира" required autofocus></p>
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div>
                <div>
                <p class="lead">
                <button class="btn btn-lg btn-default" type="submit">Sign in</button>
                </p>
                </div>
            </form>

        </div> <!-- /container -->
        <div class="mastfoot">

        </div>
        <div class="inner">
            <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
