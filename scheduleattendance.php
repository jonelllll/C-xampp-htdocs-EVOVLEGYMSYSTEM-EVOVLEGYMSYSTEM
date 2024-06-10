
<!--
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>chedule</title>
<style>


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
background-color: #000000;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
text-decoration: none;
}
.btn:hover {
background-color: #000000;
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
background-color: #000000;
color: #fff;
}
</style>
</head>
<body>
<div class="container">
<h1>Schedule</h1>
<table class="schedule-table">
<thead>
<tr>
<th>Day</th>
<th>Time</th>
<th>Activity</th>
</tr>
</thead>
<tbody>
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
            Add more rows as needed 
</tbody>
</table>
<a href="dashboard.php" class="btn">Back to Dashboard</a>
</div>
</body>
</html>

-->


<!DOCTYPE html>
 <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Attendance</title>
   <style>
 body{
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
.container 
    {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
h1 
   {
    color: #333;
   }
.btn {
display: inline-block;
padding: 10px 20px;
background-color: #333;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
text-decoration: none;
}
.btn:hover {
background-color: #ccc;
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
background-color: #333;
color: #fff;
}
.input-group {
margin-bottom: 10px;
}
.input-group input[type="text"] {
padding: 8px;
border: 1px solid #ccc;
border-radius: 5px;
}
.input-group .btn {
padding: 8px 16px;
background-color: #28a745;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
}
.input-group .btn:hover {
background-color: #218838;
}
</style>
</head>
<body>
<div class="container">
<h1>Attendance</h1>

<form id="scheduleForm">
<div class="input-group">
<input type="text" id="dayInput" placeholder="Day (e.g., Monday)">
<input type="text" id="timeInput" placeholder="Time (e.g., 9:00 AM - 10:00 AM)">
<input type="text" id="memberInput" placeholder="Activity (Your Name)">
<button type="button" class="btn" onclick="addScheduleEntry()">Add Entry</button>
</div>

</form>
<table class="schedule-table" id="scheduleTable">
<thead>
<tr>
<th>Day</th>
<th>Time in | out</th>
<th>Member</th>
</tr>
</thead>
<tbody>
<tr>
<td>Monday</td>
<td>7:00AM - 10:00PM</td>
<td>Coach Nehl</td>
</tr>
<!--<tr>
<tr>
<td>Tuesday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<tr>
<td>Wednesday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>

<tr>
<td>Thursday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>

<tr>
<td>Friday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Saturday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Sunday</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
-->
<!-- Existing rows -->
</tbody>
</table>
<!--<a href="dashboard.php" class="btn">Back to Dashboard</a>-->
</div>
<script>
function addScheduleEntry() {
const day = document.getElementById('dayInput').value.trim();
const time = document.getElementById('timeInput').value.trim();
const activity = document.getElementById('memberInput').value.trim();
if (day && time && activity) {
const tableBody =
document.getElementById('scheduleTable').getElementsByTagName('tbody')[0];
const newRow = tableBody.insertRow();
const dayCell = newRow.insertCell(0);
const timeCell = newRow.insertCell(1);
const activityCell = newRow.insertCell(2);
dayCell.textContent = day;
timeCell.textContent = time;
activityCell.textContent = activity;
// Clear input fields
document.getElementById('dayInput').value = '';
document.getElementById('timeInput').value = '';
document.getElementById('activityInput').value = '';
} else {
alert('Please fill in all fields.');
}
}
</script>

</body>
</html>



