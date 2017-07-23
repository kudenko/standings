


    @extends('default')

        <div class="site-wrapper">

            <div class="site-wrapper-inner">

                <div class="cover-container">

                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">{{Config::get('app.name')}}</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Турниры</a></li>
                                    <li><a href="#">Вход</a></li>
                                    <li><a href="#">Регистрация</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="inner cover">

                        <h1 class="cover-heading">{{Config::get('app.name')}} - турнирные таблицы</h1>
                        <p class="lead">{{Config::get('app.name')}} - это сайт для создания турнирных таблиц.
                            Создавайте турнирные таблицы, отмечайте победителей, смотрите статистику проведенных
                            матчей.</p>
                    </div>

                </div>

                <div  class="container">

                    <form action="/create" method="POST" class="form-signin">
                        <div>
                        <h4 class="form-signin-heading">Заполните форму для создания турнирной таблицы</h4>
                        <label for="tournament" class="sr-only">Название турнира</label>
                            <p><input type="text" id="tournament" name="tournament"
                               class="form-control" placeholder="Название турнира" required
                               autofocus></p>
                        <label for="players" class="sr-only">Участники</label>

                            <p><textarea id="players" name="players" rows="10" cols="45"
                               class="form-control" placeholder="Участники турнира. Введите по одному в каждой строке"></textarea></p>

                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div>

                        <p class="lead">
                        <button class="btn btn-lg btn-default" type="submit">Создать</button>
                        </p>
                            @include('includes.footer')
                        </div>
                    </form>

                </div> <!-- /container -->
            </div>
        </div>




