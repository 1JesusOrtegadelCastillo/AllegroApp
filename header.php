
<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <title>HR</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>
<body>

  <header class="site-header">
    <div class="container">
      <input type="checkbox" id="check">
      <div class="logo-container">
      <a href="index.php"><h3 class="logo">Allegro</h3></a>
      </div><!--logo-container-->

      <div class="nav-btn">
        <div class="nav-links">
          <ul>
            <li class="nav-link" style="--i: .6s">
              <a href="#">Employees<i class="fas fa-caret-down"></i></a>
              <div class="dropdown">
                <ul>
                <li class="dropdown-link">
                    <a href="new_employee.php">New Employee</a>
                  </li><!-- link 2 li-->
                  <li class="dropdown-link">
                    <a href="employees_all.php">All employees</a>
                  </li><!-- link 2 li-->
                  <li class="dropdown-link">
                    <a href="#">Requisitions<i class="fas fa-caret-down"></i></a>
                    <!-- second employee dropdown inside the first-->
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a href="">New Requisitions</a>
                        </li><!-- systems li-->
                        <li class="dropdown-link">
                          <a href="">Candidates</a>
                        </li><!-- Hresources li-->
                        <li class="dropdown-link">
                          <a href="">Interviews</a>
                        </li><!-- Operations li-->
                        <div class="arrow"></div>
                      </ul>
                    </div><!--Employees second dropdown-->
                    <li class="dropdown-link">
                    <a href="">Processes</a>
                  </li><!-- link 2 li-->
                  <li class="dropdown-link">
                    <a href="">Manuals</a>
                  </li><!-- link 2 li-->
                  </li><!-- link 1 li-->
                  <!-- <li class="dropdown-link">
                    <a href="#">Link 2</a>
                  </li>link 2 li -->
                  <div class="arrow"></div>
                </ul>
              </div><!--Employees dropdown-->
            </li><!--Employees li-->
            <li class="nav-link" style="--i: .85s">
              <a href="#">Payroll<i class="fas fa-caret-down"></i></a>
              <div class="dropdown">
                <ul>
                  <li class="dropdown-link">
                    <a href="#">Process 1</a>
                  </li><!-- link 2 li-->
                  <li class="dropdown-link">
                    <a href="#">Process 2<i class="fas fa-caret-down"></i></a>
                    <!-- second employee dropdown inside the first-->
                    <div class="dropdown second">
                      <ul>
                        <li class="dropdown-link">
                          <a href="#">Process 2.1</a>
                        </li><!-- link 1 li-->
                        <div class="arrow"></div>
                      </ul>
                    </div><!--requisition second dropdown-->
                  </li><!-- link 1 li-->
                  <li class="dropdown-link">
                    <a href="#">Process 3</a>
                  </li><!-- link 2 li-->
                  <div class="arrow"></div>
                </ul>
              </div><!--Requisition dropdown-->
            </li><!--Requisitions li-->
            <li class="nav-link" style="--i: 1.1s">
              <a href="#">Finance<i class="fas fa-caret-down"></i></a>
            </li><!--Payroll li-->
            <li class="nav-link" style="--i: 1.35s">
              <a href="#">Reporting</a>
            </li><!--other li-->
          </ul>
        </div><!--nav-links-->
        <div class="log-sign" style="--i: 1.7s">
          <a href="#" class="btn transparent">Log in</a>
          <a href="#" class="btn solid">Sign Up</a>
        </div><!--log-sign-->
      </div><!--nav-btn-->
      <div class="burger-menu-container">
        <div class="burger-menu">
          <div></div>
        </div><!--burger-menu-->
      </div><!--burger-menu-container-->
    </div><!--container-->
  </header>