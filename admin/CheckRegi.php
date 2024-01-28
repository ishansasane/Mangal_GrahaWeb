<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <!-- Include Bootstrap for styling and datepicker -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Search</h2>
        <div class="row">
            <!-- Card 1: By Date and Batch -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">By Date and Batch</h5>
                        <form action="search.php" method="post">
                            <div class="form-group">
                                <label for="datepicker">Select Date:</label>
                                <input type="text" id="datepicker" name="selectedDate" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="batch">Select Batch:</label>
                                <select name="selectedBatch" id="batch" class="form-control">
                                    <option value="8-10">8 AM to 10 AM</option>
                                    <option value="10-12">10 AM to 12 PM</option>
                                    <option value="12-3">12 PM to 3 PM</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Card 2: By Name and Phone -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-danger">By Name and Phone</h5>
                        <form action="search.php" method="post">
                            <div class="form-group">
                                <label for="name">Enter Name:</label>
                                <input type="text" id="name" name="searchName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Enter Phone:</label>
                                <input type="text" id="phone" name="searchPhone" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Display Results in a Table -->
        <?php
            // Include code for database connection and query execution

            // Example table header
            $tableHeader = '<h3 class="mt-4">Search Results</h3><table class="table table-bordered mt-2"><thead><tr><th>UniqueID</th><th>Name</th><th>Phone</th><th>Abhishek Type</th><th>Batch</th></tr></thead><tbody>';

            // Example table row (replace with actual data from the database)
            $tableRow = '<tr><td>123</td><td>John Doe</td><td>1234567890</td><td>Type A</td><td>8-10</td></tr>';

            // Close the table
            $tableFooter = '</tbody></table>';

            // Display the table
            echo $tableHeader . $tableRow . $tableFooter;
        ?>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Initialize Datepicker -->
    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
</body>
</html>
