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

        h1 {
            color: #333;
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
        }

        .btn:hover {
            background-color: #0056b3;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Schedule Management</h1>
        <form id="scheduleForm">
            <div class="input-group">
                <input type="text" id="dayInput" placeholder="Day (e.g., Monday)">
                <input type="text" id="timeInput" placeholder="Time (e.g., 9:00 AM - 10:00 AM)">
                <input type="text" id="activityInput" placeholder="Activity (e.g., Cardio)">
                <button type="button" class="btn" onclick="addScheduleEntry()">Add Entry</button>
            </div>
        </form>
        <table class="schedule-table" id="scheduleTable">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Activity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>9:00 AM - 10:00 AM</td>
                    <td>Cardio</td>
                    <td><button type="button" class="btn" onclick="deleteRow(this)">Delete</button></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>11:00 AM - 12:00 PM</td>
                    <td>Weightlifting</td>
                    <td><button type="button" class="btn" onclick="deleteRow(this)">Delete</button></td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>6:00 PM - 7:00 PM</td>
                    <td>Yoga</td>
                    <td><button type="button" class="btn" onclick="deleteRow(this)">Delete</button></td>
                </tr>
                <!-- Existing rows -->
            </tbody>
        </table>
        <a href="dashboard.php" class="btn">Back to Dashboard</a>
    </div>

    <script>
        function addScheduleEntry() {
            const day = document.getElementById('dayInput').value.trim();
            const time = document.getElementById('timeInput').value.trim();
            const activity = document.getElementById('activityInput').value.trim();

            if (day && time && activity) {
                const tableBody = document.getElementById('scheduleTable').getElementsByTagName('tbody')[0];
                const newRow = tableBody.insertRow();
                const dayCell = newRow.insertCell(0);
                const timeCell = newRow.insertCell(1);
                const activityCell = newRow.insertCell(2);
                const actionCell = newRow.insertCell(3);

                dayCell.textContent = day;
                timeCell.textContent = time;
                activityCell.textContent = activity;
                actionCell.innerHTML = '<button type="button" class="btn" onclick="deleteRow(this)">Delete</button>';

                // Clear input fields
                document.getElementById('dayInput').value = '';
                document.getElementById('timeInput').value = '';
                document.getElementById('activityInput').value = '';
            } else {
                alert('Please fill in all fields.');
            }
        }

        function deleteRow(btn) {
            const row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>