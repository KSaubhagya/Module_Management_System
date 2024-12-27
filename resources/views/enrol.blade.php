<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{url('courses')}}">{{ __('Modules') }} </a>
            &emsp;&emsp; 
        <a href="{{url('courses')}}">{{ __('Calender') }} </a>
     
        </h2>  
    </x-slot>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollments</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 2rem 0;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .university-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }
        .logo {
            max-width: 100px;
        }
        a {
        text-decoration: none; 
        color: inherit;      
         }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="university-header">
            <img src="https://via.placeholder.com/100" alt="University Logo" class="logo">
            <div class="text-end">
                <h5 class="mb-1">STUDENT ENROLLMENTS</h5>
                <p class="mb-0">{{ Auth::user()->email }}</p>
                <p class="mb-0">Intake 2021 (Intake)</p>
                <p class="mb-0">{{ Auth::user()->name }}</p>
            </div>
        </div>

        <!-- Enrollment Table -->
        <div class="table-container">
            <h6><b>2024 Non Technical Term 1</b></h6>
            <h6>Required: 17.5 credits and 7 modules</h6>
            <table class="table table-bordered" id="enrolledTable">
                <thead class="table-light">
                    <tr>
                        <th>Course Code</th>
                        <th>Course</th>
                        <th>Credits</th>
                        <th>Action</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DI1002</td>
                        <td>Japanese for Beginners</td>
                        <td class="credit">2.00</td>
                        <td>Enrolled</td>
                        <td>Elective</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total Semester Credits</td>
                        <td id="total-credits">2.00</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Elective Courses Section -->
        <div class="table-container">
            <h6>2024 Non Technical Term 1 - Electives</h6>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Course Code</th>
                        <th>Course</th>
                        <th>Credits</th>
                        <th>Action</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DI1008</td>
                        <td>Hindi for Beginners</td>
                        <td class="credit">2.00</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Elective</td>
                    </tr>
                    <tr>
                        <td>DI1003</td>
                        <td>German for Beginners</td>
                        <td class="credit">2.00</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Elective</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Compulsory Courses Section -->
        <div class="table-container">
            <h6>2024 Non Technical Term 1 - Compulsory</h6>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Course Code</th>
                        <th>Course</th>
                        <th>Credits</th>
                        <th>Action</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IN1120</td>
                        <td>Structured Programming I</td>
                        <td class="credit">2.50</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Compulsory</td>
                    </tr>
                    <tr>
                        <td>IN1301</td>
                        <td>Digital Systems and Digital Computers</td>
                        <td class="credit">3.00</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Compulsory</td>
                    </tr>
                     <tr>
                        <td>IN1601</td>
                        <td>Multimedia Technologies and Web Design</td>
                        <td class="credit">3.00</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Compulsory</td>
                    </tr>
                    <tr>
                        <td>IS1101</td>
                        <td>Principles of Management</td>
                        <td class="credit">2.50</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Compulsory</td>
                    </tr>
                    <tr>
                        <td>CM1121</td>
                        <td>Essentials of Mathematics</td>
                        <td class="credit">2.50</td>
                        <td><button class="btn btn-light btn-sm enroll-btn">Enroll</button></td>
                        <td>Compulsory</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript to Handle Enrollment -->
    <script>
        // Function to calculate total credits
        function calculateTotalCredits() {
            let totalCredits = 0;
            const creditElements = document.querySelectorAll('#enrolledTable .credit'); // Get all enrolled credit cells

            creditElements.forEach((element) => {
                totalCredits += parseFloat(element.textContent); // Add up the credits
            });

            // Display the total in the footer
            document.getElementById('total-credits').textContent = totalCredits.toFixed(2); // Format to 2 decimal places
            return totalCredits;
        }

        // Handle "Enroll" button clicks
        document.querySelectorAll('.enroll-btn').forEach((button) => {
            button.addEventListener('click', function () {
                const row = button.closest('tr'); // Get the row of the button
                const credits = parseFloat(row.querySelector('.credit').textContent); // Get the credits
                const totalCredits = calculateTotalCredits(); // Current total credits

                // Check if adding the course exceeds the credit limit
                if (totalCredits + credits > 17.5) {
                    alert('You cannot exceed 17.5 credits or 7 modules!');
                    return;
                }

                // Move the row to the enrolled table
                const enrolledTableBody = document.querySelector('#enrolledTable tbody');
                row.querySelector('td:nth-child(4)').textContent = 'Enrolled'; // Change Action to "Enrolled"
                enrolledTableBody.appendChild(row); // Move the row
                calculateTotalCredits(); // Recalculate total credits
            });
        });

        // Initial credit calculation
        calculateTotalCredits();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</x-app-layout>
