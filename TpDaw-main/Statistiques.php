<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="Statistiques.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>

<body>
    <header>
    <h2 class="logo">LOGO</h2>
    <nav>
        <ul class="nav_list">
            <li><a href="admin_page.php">Home</a></li>
            <li><a href="index.php" class="btn">clients</a></li>
            <li><a href="Statistiques.php">Statistics</a></li>
            <li><a href="prof-admin.php">profile</a></li>
            <li><a href="logout.php" class="btn">logout</a></li>
        </ul>
    </nav>
    </header>
    <div class="Page-Wrapper">
        <!-- Header -->


        

        <!-- Main Content -->
        <main>
            <h1>Analytics</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total Sales</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Site Visit</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Searches</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

           
           
        </main>
    </div>
</div>
<!-- End of Page Wrapper -->

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>