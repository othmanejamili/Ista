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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                                    <option value="GE102">GE102</option>
                                    <option value="GE103">GE103</option>
                                    <option value="GE104">GE104</option>
                                    <option value="GE105">GE105</option>
                                    <option value="DEV101">DEV101</option>
                                    <option value="DEV102">DEV102</option>
                                    <option value="ID101">ID101</option>
                                    <option value="ID102">ID102</option>
                                    <option value="CI101">CI101</option>
                                    <option value="CI102">CI102</option>
                                    <option value="AAOG201">AAOG201</option>
                                    <option value="AAOG202">AAOG202</option>
                                    <option value="AAOC202">AAOC201</option>
                                    <option value="AAOC202">AAOC202</option>
                                    <option value="AAOCP202">AAOCP201</option>
                                    <option value="AAOCP202">AAOCP202</option>
                                    <option value="GEOOM201">GEOOM201</option>
                                    <option value="GEOCM201">GEOCM201</option>
                                    <option value="GEOCM202">GEOCM202</option>
                                    <option value="GEORH201">GEORH201</option>
                                    <option value="GEORH201">GEORH201</option>
                                    <option value="GEORH202">GEORH202</option>
                                    <option value="GEOCF201">GEOCF201</option>
                                    <option value="GEOCF202">GEOCF202</option>
                                    <option value="DEVOWFS201">DEVOWFS201</option>
                                    <option value="DEVOWFS202">DEVOWFS202</option>
                                    <option value="IDOSR201">IDOSR201</option>
                                    <option value="IDOSR202">IDOSR202</option>
                                    <option value="IDOCS201">IDOCS201</option>
                                    <option value="CI201">CI201</option>
                                    <option value="CI202">CI202</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="filier">Filiere</label>
                                <select class="form-control" id="filier" name="filier">
                                    <option value="Assistant Adminatratif">Assistant Adminatratif</option>
                                    <option value="Getion des Entreprises">Getion Des Entreprises</option>
                                    <option value="Dèveloppement Digital">Dèveloppement Digital</option>
                                    <option value="Infrastructure Digitale">Infrastructure Digitale</option>
                                    <option value="Chimie Industrielle (1A)">Chimie Industrielle (1A)</option>
                                    <option value="Assistant Adminatratif Option Commerce">Assistant Adminatratif Option Commerce</option>
                                    <option value="Assistant Adminatratif Option Comptabilitè">Assistant Adminatratif Option Comptabilitè</option>
                                    <option value="Assistant Adminatratif Option Getion">Assistant Adminatratif Option Getion</option>
                                    <option value="Dèveloppement Digital Option Web Full Stack">Dèveloppement Digital Option Web Full Stack</option>
                                    <option value="Getion Des Entreprises Option Comptabilitè et Finance">Getion Des Entreprises Option Comptabilitè et Finance</option>
                                    <option value="Getion Des Entreprises Option Commerce et Marketing">Getion Des Entreprises Option Commerce et Marketing</option>
                                    <option value="Getion Des Entreprises Option Office Manager">Getion Des Entreprises Option Office Manager</option>
                                    <option value="Getion Des Entreprises Option Ressources Humaines">Getion Des Entreprises Option Ressources Humaines</option>
                                    <option value="Infrastructure Digitale Option Cyber sécurité">Infrastructure Digitale Option Cyber sécurité</option>
                                    <option value="Infrastructure Digitale Option systèmes et Reséaux">Infrastructure Digitale Option systèmes et Reséaux</option>
                                    <option value="Chimie Industrielle (2A)">Chimie Industrielle (2A)</option>
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
            <tr>
                <th>stagaire</th> 
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Absence</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($absences as $absence)
        <tr data-filier="{{ $absence->CodeDiplome }}">
                <td><b>{{ $absence->Nom }} {{ $absence->Prenom }}</b></td> <!-- Display absence data here -->
                <td data-day="Monday">{{$absence->heur_absence}}</td>
                <td data-day="Tuesday"></td>
                <td data-day="Wednesday"></td>
                <td data-day="Thursday"></td>
                <td data-day="Friday"></td>
                <td data-day="Saturday"></td>
                <td><a href="{{ url('absences/'.$absence->id.'/edit') }}" class="btn btn-success mx-3">Modifier</a>
                <a href="{{ url('absences/'.$absence->id.'/edit') }}" class="btn btn-success mx-3">create</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
// Function to generate calendar header for the selected week
function generateCalendarHeader(year, month, weekStart) {
    var daysOfWeek = ['stagaire','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Absence']; // Add 'absence' to the array
    var headerRow = document.createElement('tr');

    for (var i = 0; i < 7; i++) { // Change loop condition to 8 for 8 columns
        var headerCell = document.createElement('th');
        if (i === 0) {
            headerCell.textContent = daysOfWeek[i]; // Display 'absence' in the first column
        } else {
            var date = new Date(year, month - 1, weekStart + i - 1); // Adjust date calculation
            headerCell.textContent = daysOfWeek[date.getDay()] + '-' + date.getDate();
        }
        headerRow.appendChild(headerCell);
    }

    document.getElementById('calendar-header').innerHTML = '';
    document.getElementById('calendar-header').appendChild(headerRow);
}


        // Function to generate calendar for selected year and month
        function generateCalendar(year, month, weekStart) {
            var firstDay = new Date(year, month - 1, weekStart);
            var daysInWeek = 7;
            var monthDays = [];
            var currentDate = weekStart;

            // Clear existing calendar
            document.getElementById('calendar-body').innerHTML = '';

            // Generate calendar rows
            for (var i = 0; i < 6; i++) {
                var row = document.createElement('tr');

                // Generate calendar cells
                for (var j = 0; j < daysInWeek; j++) {
                    var cell = document.createElement('td');
                    var date = new Date(year, month - 1, currentDate);
                    cell.textContent = date.getDate();
                    row.appendChild(cell);
                    currentDate++;
                }

                document.getElementById('calendar-body').appendChild(row);
            }
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
            generateCalendar(currentYear, currentMonth, currentWeekStart);
        });

        // Update calendar when year or month selection changes
        document.getElementById('year').addEventListener('change', function () {
            var selectedYear = document.getElementById('year').value;
            var selectedMonth = document.getElementById('month').value;

            currentYear = parseInt(selectedYear);
            currentMonth = parseInt(selectedMonth);
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
            generateCalendar(currentYear, currentMonth, currentWeekStart);
        });

        document.getElementById('month').addEventListener('change', function () {
            var selectedYear = document.getElementById('year').value;
            var selectedMonth = document.getElementById('month').value;

            currentYear = parseInt(selectedYear);
            currentMonth = parseInt(selectedMonth);
            generateCalendarHeader(currentYear, currentMonth, currentWeekStart);
            generateCalendar(currentYear, currentMonth, currentWeekStart);
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
    </script>
    <script>
        document.getElementById('filier').addEventListener('change', function () {
            var filierId = this.value;
            var CodeDiplomeSelect = document.getElementById('CodeDiplome');
            CodeDiplomeSelect.innerHTML = ''; // Clear existing options
            var options = {
                'Assistant Adminatratif': ['AA101', 'AA102', 'GE101'], // Options for Filiere ID 1
                'Getion des Entreprises': ['GE101', 'GE102', 'GE103', 'GE104', 'GE105'], // Options for Filiere ID 2 (Corrected)
                'Dèveloppement Digital': ['DEV101', 'DEV102'], // Options for Filiere ID 3
                'Infrastructure Digitale': ['ID101', 'ID102'], // Options for Filiere ID 4
                'Chimie Industrielle (1A)': ['CI101', 'CI102'], // Options for Filiere ID 5
                'Assistant Adminatratif Option Getion': ['AAOG201', 'AAOG202'], // Options for Filiere ID 6
                'Assistant Adminatratif Option Commerce': ['AAOC201', 'AAOC202'], // Options for Filiere ID 7
                'Assistant Adminatratif Option Comptabilitè': ['AAOCP201'], // Options for Filiere ID 8
                'Getion Des Entreprises Option Office Manager': ['GEOOM201'], // Options for Filiere ID 9
                'Getion Des Entreprises Option Commerce et Marketing': ['GEOCM201', 'GEOCM202'], // Options for Filiere ID 10
                'Getion Des Entreprises Option Ressources Humaines': ['GEORH201', 'GEORH202'], // Options for Filiere ID 11
                'Getion Des Entreprises Option Comptabilitè et Finance': ['GEOCF201', 'GEOCF202'], // Options for Filiere ID 12
                'Dèveloppement Digital Option Web Full Stack': ['DEVOWFS201', 'DEVOWFS202'], // Options for Filiere ID 13
                'Infrastructure Digitale Option systèmes et Reséaux': ['IDOSR201', 'IDOSR202'], // Options for Filiere ID 14
                'Infrastructure Digitale Option Cyber sécurité': ['IDOCS201', 'IDOCS202'], // Options for Filiere ID 15
                'Chimie Industrielle (2A)': ['CI201', 'CI202'] // Options for Filiere ID 16
                // Add more options for other filieres
            };
            options[filierId].forEach(function (option) {
                var optionElement = document.createElement('option');
                optionElement.value = option;
                optionElement.textContent = option;
                CodeDiplomeSelect.appendChild(optionElement);
            });
        });
    </script>
<script>
    document.getElementById('CodeDiplome').addEventListener('change', function() {
        var selectedFilier = this.value;
        var tableRows = document.querySelectorAll('#cvTable tbody tr');

        tableRows.forEach(function(row) {
            if (row.getAttribute('data-filier') === selectedFilier || selectedFilier === 'All') {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<script></script>
</body>
</html>
