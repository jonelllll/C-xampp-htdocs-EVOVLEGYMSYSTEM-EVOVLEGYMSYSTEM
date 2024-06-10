<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .schedule-table th, .schedule-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .schedule-table th {
            background-color: #007bff;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Schedule Management</h1>
        <table class="schedule-table" id="scheduleTable">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>
                <!-- Existing rows -->
                <tr>
                    <td>Monday</td>
                    <td>9:00 AM - 10:00 AM</td>
                    <td>Cardio</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>11:00 AM - 12:00 PM</td>
                    <td>Weightlifting</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>6:00 PM - 7:00 PM</td>
                    <td>Yoga</td>
                </tr>
            </tbody>
        </table>
        <a href="add_entry.html" class="btn">Add More Entries</a> <!-- Link to the add entry webpage -->
        <a href="dashboard.php" class="btn">Back to Dashboard</a>
    </div>
</body>
</html>
