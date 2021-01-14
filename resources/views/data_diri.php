<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .sidebar-container {
        position: fixed;
        width: 220px;
        height: 100%;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        background: #1a1a1a;
        color: #fff;
        }

        .content-container {
        padding-top: 20px;
        }

        .sidebar-logo {
        padding: 10px 15px 10px 30px;
        font-size: 20px;
        background-color: #2574A9;
        }

        .sidebar-navigation {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: relative;
        }

        .sidebar-navigation li {
        background-color: transparent;
        position: relative;
        display: inline-block;
        width: 100%;
        line-height: 20px;
        }

        .sidebar-navigation li a {
        padding: 10px 15px 10px 30px;
        display: block;
        color: #fff;
        }

        .sidebar-navigation li .fa {
        margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
        text-decoration: none;
        outline: none;
        }

        .sidebar-navigation li::before {
        background-color: #2574A9;
        position: absolute;
        content: '';
        height: 100%;
        left: 0;
        top: 0;
        -webkit-transition: width 0.2s ease-in;
        transition: width 0.2s ease-in;
        width: 3px;
        z-index: -1;
        }

        .sidebar-navigation li:hover::before {
        width: 100%;
        }

        .sidebar-navigation .header {
        font-size: 12px;
        text-transform: uppercase;
        background-color: #151515;
        padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
        background-color: transparent;
        }

        .content-container {
        padding-left: 220px;
        }
    </style>

  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #518521;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="sidebar-container">
  <div class="sidebar-logo">
    Project Name
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i> Homepage
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li class="header">Another Menu</li>
    <li>
      <a href="#">
        <i class="fa fa-users" aria-hidden="true"></i> Friends
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i> Settings
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
      </a>
    </li>
  </ul>
</div>





<span>
<h3></h3>
</span>

    <div class="container col-md-6">
        <div class="card">
            <div class="card-header " style="background-color: #0cc994">
                <h2>Data Diri</h2>
            </div>

            <div class="card-body bg-light">

            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>

           
            <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            </div>
           
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>