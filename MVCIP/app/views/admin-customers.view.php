<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/admin-customer-style.css">
    
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
                        <h2>Customers Account</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>UserID</td>
                                <td>LastName</td>
                                <td>FirstName</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->UserID ?></td>
                                <td><?= $user->LastName ?></td>
                                <td><?= $user->FirstName ?></td>
                                <td><?= $user->Phone ?></td>
                                <td><?= $user->Email ?></td>
                                <td><?= $user->Password ?></td>

                                <td>
                                    <!-- Button for delete -->
                                    <button class="delete-btn" id="delete-btn" name="delete-btn" data-userid="<?= $user->UserID ?>">Delete</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?=ROOT?>/assets/dashboard-assets/js/main.js"></script>
    
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
    $(document).ready(function() {
        // JavaScript to handle delete action
        $('.delete-btn').click(function(e) {
            e.preventDefault(); // Prevent default button behavior

            // Retrieve user ID from data attribute
            var userId = $(this).data('userid');

            // Store reference to the current row for removal later
            var rowToRemove = $(this).closest('tr');

            // Perform AJAX request to Customers controller for deleting user
            $.ajax({
                url: 'customers/deleteUser', // Adjust the URL as per your routing logic
                method: 'POST',
                data: { userId: userId },
                dataType: 'json',
                success: function(response) {
                    console.log('Response:', response); // Log the response
                    if (response && response.success === false) {
                        console.log('User deleted successfully!');
                        alert('User deleted successfully!');
                        rowToRemove.remove(); // Remove the deleted user row from the table
                    } else {
                        console.log('Failed to delete user. Please try again.');
                        alert('Failed to delete user. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('An error occurred while deleting user.');
                }
            });
        });
    });
    </script>
</body>

</html>