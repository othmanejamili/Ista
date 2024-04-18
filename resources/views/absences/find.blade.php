<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Attendance Calendar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <label for="CodeDiplome">CodeDiplome</label>
                <select name="CodeDiplome" id="CodeDiplome" class="form-control @error('CodeDiplome') is-invalid @enderror">
                    <option value="AA101">AA101</option>
                    <option value="AA102">AA102</option>
                    <option value="GE101">GE101</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="filier">Filiere</label>
                <select class="form-control" id="filier" name="filier">
                    <option value="Assistant Adminatratif">Assistant Adminatratif</option>
                    <option value="Getion des Entreprises">Getion Des Entreprises</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="year">Year:</label>
                <select name="year" id="year" class="form-control">
                    @for ($i = date('Y') - 5; $i <= date('Y') + 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                <label for="month">Month:</label>
                <select name="month" id="month" class="form-control">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary mr-2" id="prevWeek">Previous Week</button>
                <button class="btn btn-primary" id="nextWeek">Next Week</button>
            </div>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="cvTable">
                <thead id="calendar-header">
                    <!-- Calendar header row -->
                    <tr>
                        <th>stagaire</th> 
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($absences as $absence)
<tr data-filier="{{ $absence->CodeDiplome }}">
    <td><b>{{ $absence->Nom }} {{ $absence->Prenom }}</b></td>
    <!-- Loop through days of the week -->
    @foreach ($daysOfWeek as $day)
    <td data-day="{{ $day }}">
        <!-- Check if absence date matches the day of the week -->
        @if ($absence->date_absence->englishDayOfWeek == $day)
            {{ $absence->heur_absence }}
        @endif
    </td>
    @endforeach
    <td><a href="{{ url('absences/'.$absence->id.'/edit') }}" class="btn btn-success mx-3">Modifier</a></td>
</tr>
@endforeach


                </tbody>
            </table>
        </div>
    </div>


    <script>
        // Function to generate calendar header for the selected week
        function generateCalendarHeader(year, month, weekStart) {
            var daysOfWeek = ['stagaire','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']; // Add 'stagaire' to the array
            var headerRow = document.createElement('tr');

            for (var i = 0; i < 8; i++) { // Change loop condition to 8 for 8 columns
                var headerCell = document.createElement('th');
                headerCell.textContent = daysOfWeek[i]; // Display 'stagaire' in the first column
                headerRow.appendChild(headerCell);
            }

            document.getElementById('calendar-header').innerHTML = '';
            document.getElementById('calendar-header').appendChild(headerRow);
        }

        // Initialize calendar with current year, month, and week
        document.addEventListener('DOMContentLoaded', function () {
            var currentDate = new Date();
            currentYear = currentDate.getFullYear();
            currentMonth = currentDate.getMonth() + 1;
            currentWeekStart = currentDate.getDate() - currentDate.getDay() + 1;

            document.getElementById('year').value = currentYear;
            document.getElementById('month').value = currentMonth;

            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
        });

        // Update calendar when year or month selection changes
        document.getElementById('year').addEventListener('change', function () {
            var selectedYear = document.getElementById('year').value;
            var selectedMonth = document.getElementById('month').value;

            currentYear = parseInt(selectedYear);
            currentMonth = parseInt(selectedMonth);
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
        });

        document.getElementById('month').addEventListener('change', function () {
            var selectedYear = document.getElementById('year').value;
            var selectedMonth = document.getElementById('month').value;

            currentYear = parseInt(selectedYear);
            currentMonth = parseInt(selectedMonth);
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
        });

        // Update calendar header when previous week button is clicked
        document.getElementById('prevWeek').addEventListener('click', function () {
            currentWeekStart -= 7;
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
        });

        // Update calendar header when next week button is clicked
        document.getElementById('nextWeek').addEventListener('click', function () {
            currentWeekStart += 7;
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
        });

        // Dynamically change CodeDiplome options based on Filiere selection
        document.getElementById('filier').addEventListener('change', function () {
            var filierId = this.value;
            var CodeDiplomeSelect = document.getElementById('CodeDiplome');
            CodeDiplomeSelect.innerHTML = ''; // Clear existing options
            var options = {
                'Assistant Adminatratif': ['AA101', 'AA102', 'GE101'], // Options for Filiere ID 1
                'Getion des Entreprises': ['GE101', 'GE102', 'GE103', 'GE104', 'GE105'], // Options for Filiere ID 2 (Corrected)
                // Add other options here
            };
            options[filierId].forEach(function (option) {
                var optionElement = document.createElement('option');
                optionElement.value = option;
                optionElement.textContent = option;
                CodeDiplomeSelect.appendChild(optionElement);
            });
        });
    </script>
</body>
</html>
