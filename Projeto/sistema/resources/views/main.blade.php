<!DOCTYPE html>
<html lang="en">

<head>
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>To-do List</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('tasks.index')}}">Home</a>
                    </li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf

                            </form>
                        </ul>
                    </li>
                    @endguest
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
    </footer>

    <style type="text/css">
        .todo-nav {
            margin-top: 20px;
        }

        .todo-list {
            margin: 10px 0;
        }

        .todo-list .todo-item {
            padding: 15px;
            margin: 5px 0;
            border-radius: 0;
            background: #f7f7f7
        }

        .todo-list.only-active .todo-item.complete {
            display: none
        }

        .todo-list.only-active .todo-item:not(.complete) {
            display: block
        }

        .todo-list.only-complete .todo-item:not(.complete) {
            display: none
        }

        .todo-list.only-complete .todo-item.complete {
            display: block
        }

        .todo-list .todo-item.complete span {
            text-decoration: line-through
        }

        .remove-todo-item {
            color: #ccc;
            visibility: hidden
        }

        .remove-todo-item:hover {
            color: #5f5f5f
        }

        .todo-item:hover .remove-todo-item {
            visibility: visible
        }

        div.checker {
            width: 18px;
            height: 18px
        }

        div.checker input,
        div.checker span {
            width: 18px;
            height: 18px
        }

        div.checker span {
            display: -moz-inline-box;
            display: inline-block;
            zoom: 1;
            text-align: center;
            background-position: 0 -260px;
        }

        div.checker,
        div.checker input,
        div.checker span {
            width: 19px;
            height: 19px;
        }

        div.checker,
        div.radio,
        div.uploader {
            position: relative;
        }

        div.button,
        div.button *,
        div.checker,
        div.checker *,
        div.radio,
        div.radio *,
        div.selector,
        div.selector *,
        div.uploader,
        div.uploader * {
            margin: 0;
            padding: 0;
        }

        div.button,
        div.checker,
        div.radio,
        div.selector,
        div.uploader {
            display: -moz-inline-box;
            display: inline-block;
            zoom: 1;
            vertical-align: middle;
        }

        .card {
            margin-top: 20px;
            padding: 25px;
            margin-bottom: 20px;
            border: initial;
            background: #fff;
            border-radius: calc(.15rem - 1px);
            box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04), 0 1px 6px rgba(0, 0, 0, 0.04);
        }

        .btn-custom {
            border-radius: 200px;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {

            "use strict";

            var todo = function() {
                $('.todo-list .todo-item input').click(function() {
                    if ($(this).is(':checked')) {
                        $(this).parent().parent().parent().toggleClass('complete');
                    } else {
                        $(this).parent().parent().parent().toggleClass('complete');
                    }
                });

                $('.todo-nav .all-task').click(function() {
                    $('.todo-list').removeClass('only-active');
                    $('.todo-list').removeClass('only-complete');
                    $('.todo-nav li.active').removeClass('active');
                    $(this).addClass('active');
                });

                $('.todo-nav .active-task').click(function() {
                    $('.todo-list').removeClass('only-complete');
                    $('.todo-list').addClass('only-active');
                    $('.todo-nav li.active').removeClass('active');
                    $(this).addClass('active');
                });

                $('.todo-nav .completed-task').click(function() {
                    $('.todo-list').removeClass('only-active');
                    $('.todo-list').addClass('only-complete');
                    $('.todo-nav li.active').removeClass('active');
                    $(this).addClass('active');
                });

                $('#uniform-all-complete input').click(function() {
                    if ($(this).is(':checked')) {
                        $('.todo-item .checker span:not(.checked) input').click();
                    } else {
                        $('.todo-item .checker span.checked input').click();
                    }
                });

                $('.remove-todo-item').click(function() {
                    $(this).parent().remove();
                });
            };

            todo();

            $(".add-task").keypress(function(e) {
                if ((e.which == 13) && (!$(this).val().length == 0)) {
                    $('<div class="todo-item"><div class="checker"><span class=""><input type="checkbox"></span></div> <span>' + $(this).val() + '</span> <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a></div>').insertAfter('.todo-list .todo-item:last-child');
                    $(this).val('');
                } else if (e.which == 13) {
                    alert('Please enter new task');
                }
                $(document).on('.todo-list .todo-item.added input').click(function() {
                    if ($(this).is(':checked')) {
                        $(this).parent().parent().parent().toggleClass('complete');
                    } else {
                        $(this).parent().parent().parent().toggleClass('complete');
                    }
                });
                $('.todo-list .todo-item.added .remove-todo-item').click(function() {
                    $(this).parent().remove();
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>