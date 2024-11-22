<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
    <style>
        .search-results {
            margin-top: 10px;
        }
    </style>
    <script>
        function searchStudent() {
            const prefix = document.getElementById('searchInput').value;

            if (prefix.length === 0) {
                document.getElementById('results').innerHTML = '';
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("GET", `getstudent.php?prefix=${encodeURIComponent(prefix)}`, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    const students = JSON.parse(xhr.responseText);
                    let html = '<ul>';
                    students.forEach(student => {
                        html += `<li>${student.ten}</li>`;
                    });
                    html += '</ul>';
                    document.getElementById('results').innerHTML = html;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Search Student</h1>
    <input type="text" id="searchInput" onkeyup="searchStudent()" placeholder="Enter student name">
    <div id="results" class="search-results"></div>
</body>
</html>
