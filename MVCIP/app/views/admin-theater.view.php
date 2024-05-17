<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/admin-theater-style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="a">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Admin Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="AdminDashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="Customers">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li> -->

                <li>
                    <a href="Theaters">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Theater</span>
                    </a>
                </li>

                <li>
                    <a href="Movies">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Movies</span>
                    </a>
                </li>

                <li>
                    <a href="Customers">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="Reservations">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Reservations</span>
                    </a>
                </li>

                <li>
                    <a href="Requests">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Requests</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="<?=ROOT?>/assets/dashboard-assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Theater</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Location</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($theaters as $theater) : ?>
                                <tr>
                                    <td><?= $theater->TheaterID ?></td>
                                    <td><?= $theater->Name ?></td>
                                    <td><?= $theater->Location ?></td>
                                    <td>
                                    <!-- Button for delete -->
                                    <button class="delete-btn" id="delete-btn" name="delete-btn">Delete</button>
                                    <button class="update-btn" id="update-btn" name="update-btn">Update</button>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Screen</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>TheaterID</th>
                                <th>ScreenID</th>
                                <th>Name</th>
                                <th>Seat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($screens as $screen) : ?>
                                <tr>
                                    <td><?= $screen->TheaterID ?></td>
                                    <td><?= $screen->ScreenID ?></td>
                                    <td><?= $screen->ScreenName ?></td>
                                    <td><?= $screen->Capacity ?></td>
                                    <td>
                                        <!-- Buttons for delete and update -->
                                        <button class="delete-btn" id="delete-btn" name="delete-btn">Delete</button>
                                        <button class="update-btn" id="update-btn" name="update-btn">Update</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="<?=ROOT?>/assets/dashboard-assets/js/main.js"></script>

    <!-- ======= Charts JS ====== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="<?=ROOT?>/assets/dashboard-assets/js/chartsJS.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>