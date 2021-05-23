<?php include('header.php'); ?>
<style>
    body,
    html {
        height: 100%;
    }


    /* remove outer padding */
    .main .row {
        padding: 0px;
        margin: 0px;
    }

    /* ul.nav li:hover > ul.dropdown-menu {
        display: none;
    } */

    /*Remove rounded coners*/

    nav.sidebar.navbar {
        border-radius: 0px;
    }

    nav.sidebar,
    .main {
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }

    /* Add gap to nav and right windows.*/
    .main {
        padding: 10px 10px 0 10px;
    }

    /* .....NavBar: Icon only with coloring/layout.....*/

    /*small/medium side display*/
    @media (min-width: 768px) {

        /*Allow main to be next to Nav*/
        .main {
            position: absolute;
            width: calc(100% - 40px);
            /*keeps 100% minus nav size*/
            margin-left: 40px;
            float: right;
        }

        /*lets nav bar to be showed on mouseover*/
        nav.sidebar:hover+.main {
            margin-left: 200px;
        }

        /*Center Brand*/
        nav.sidebar.navbar.sidebar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }

        /*Center Brand*/
        nav.sidebar .navbar-brand,
        nav.sidebar .navbar-header {
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        /*Center Icons*/
        nav.sidebar a {
            padding-right: 13px;
        }

        /*adds border top to first nav box */
        nav.sidebar .navbar-nav>li:first-child {
            border-top: 1px #e5e5e5 solid;
        }

        /*adds border to bottom nav boxes*/
        nav.sidebar .navbar-nav>li {
            border-bottom: 1px #e5e5e5 solid;
        }

        /* Colors/style dropdown box*/
        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /*allows nav box to use 100% width*/
        nav.sidebar .navbar-collapse,
        nav.sidebar .container-fluid {
            padding: 0 0px 0 0px;
        }

        /*colors dropdown box text */
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        /*gives sidebar width/height*/
        nav.sidebar {
            /* width: 200px; */
            height: 100%;
            margin-left: -160px;
            float: left;
            z-index: 8000;
            margin-bottom: 0px;
        }

        /*give sidebar 100% width;*/
        nav.sidebar li {
            width: 100%;
        }

        /* Move nav to full on mouse over*/
        nav.sidebar:hover {
            margin-left: 0px;
        }

        /*for hiden things when navbar hidden*/
        .forAnimate {
            opacity: 0;
        }
    }

    /* .....NavBar: Fully showing nav bar..... */

    @media (min-width: 1330px) {

        /*Allow main to be next to Nav*/
        .main {
            width: calc(100% - 200px);
            /*keeps 100% minus nav size*/
            margin-left: 200px;
        }

        /*Show all nav*/
        nav.sidebar {
            margin-left: 0px;
            float: left;
        }

        /*Show hidden items on nav*/
        nav.sidebar .forAnimate {
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover,
    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate {
        opacity: 1;
    }

    section {
        padding-left: 15px;
    }
</style>
<main>
    <div class="container">

        <div class="row UMainContain" style="margin:10px 0;">
        <div class="col-sm-3 col-lg-3">
                <nav class="navbar navbar-inverse sidebar" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header"  style="background-color: #086534;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1" style="background-color: #086534;">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1" style="background-color: #086534;">
                            <ul class="nav navbar-nav" style="background-color: #086534;">
                                <li><a href="#" class="text-white">ড্যাশবোর্ড</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" style="background-color: #086534;">সেটিংস <span class="caret"></span></a>
                                    <ul class="dropdown-menu forAnimate" role="menu" style="background-color: #086534;">
                                        <li><a href="#" class="text-white">পাসওয়ার্ড পরিবর্তন</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-6 col-lg-9" style="padding: 10px;">

            </div>
            
        </div>

    </div>
</main>


<?php include('footer.php'); ?>