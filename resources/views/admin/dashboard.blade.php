@extends('admin.layouts')

@section('content')
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
              integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: #101010;
            }

            .main {
                width: 100%;
                display: flex;
            }

            .sidebar {
                height: 100vh;
                width: 300px;
                background: #ccc;
                transition: all 0.5s ease-in-out;
            }

            .content {
                width: calc(100% - 300px);
                transition: all 0.5s ease-in-out;
            }

            header {
                background: #000;
                padding: 10px;
                display: flex;
                align-items: center;
            }

            header i.fa-bars {
                color: #fff;
                font-size: 30px;
                cursor: pointer;
            }

            .header-logo {
                font-size: 30px;
                font-weight: bold;
                color: #fff;
                margin-left: 30px;
            }

            .main.close .sidebar {
                width: 0px;
            }

            .main.close .content {
                width: 100%;
            }
        </style>
    </head>

    <body>
    <div class="main" id="main">
        <div class="sidebar">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.groups.index') }}">Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.schedule.index') }}">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <header>
                <i class="fas fa-bars" id="menu"></i>
                <div class="header-logo">MyHeader</div>
            </header>
        </div>
    </div>
    </body>

    <script>
        const Bar = document.getElementById("menu");
        const main = document.getElementById("main");
        Bar.addEventListener("click", () => {
            return main.classList.toggle("close");
        });
    </script>
@endsection
