<x-app-layout>
    
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Modules</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-control, .form-select, textarea {
            height: 50px !important; /* Ensures consistent height for all inputs */
        }
        textarea {
            resize: none; /* Prevents textarea from being resized */
        }
        a {
        text-decoration: none; 
        color: inherit;      
       }
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col text-center">
                <h3>Edit Course Modules</h3>
            </div>
        </div>

        <!-- Add New Module Section -->
        <div class="card mb-4">
            <div class="card-header text-center">Add New Module</div>
            <div class="card-body">
                <!-- Display Validation Errors -->
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Form for Adding New Module -->
                <form action="datasubmit" method="POST">
                    @csrf
                    <!-- Row 1 -->
                    <div class="row mb-3">
                        <!-- Module Code -->
                        <div class="col-md-6">
                            <label for="moduleTitle" class="form-label">Module Title</label>
                            <input type="text" class="form-control"  placeholder="Enter module title" name="title" required>
                        </div>
                        <div class="col-md-6">
                            <label for="credits" class="form-label">Credits</label>
                            <input type="number" class="form-control"  placeholder="Enter credits" name="credits" required>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="moduleCode" class="form-label">Module Code</label>
                            <input type="text" class="form-control" id="moduleCode" placeholder="Enter module code" name="code" required>
                        </div>
                        <!-- Year -->
                        <div class="col-md-6">
                            <label for="moduleYear" class="form-label">Year</label>
                            <input type="number" class="form-control" id="moduleYear" placeholder="Enter year" name="year" min="2000" max="2025" required>
                        </div>
                    </div>
                    <!-- Row 2 -->
                    <div class="row mb-3">
                        <!-- Duration -->
                        <div class="col-md-6">
                            <label for="moduleDuration" class="form-label">Duration (in weeks)</label>
                            <input type="number" class="form-control" id="moduleDuration" placeholder="Enter duration" name="duration">
                        </div>
                        <!-- Instructor -->
                        <div class="col-md-6">
                            <label for="moduleInstructor" class="form-label">Instructor</label>
                            <input type="text" class="form-control" id="moduleInstructor" placeholder="Enter instructor's name" name="instructor" required>
                        </div>
                    </div>
                    <!-- Row 3 -->
                    <div class="row mb-3">
                        <!-- Course Description -->
                        <div class="col-md-6">
                            <label for="courseDescription" class="form-label">Course Description</label>
                            <textarea class="form-control" id="courseDescription" placeholder="Enter course description" name="description"></textarea>
                        </div>
                        <!-- Semester -->
                        <div class="col-md-6">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester" required>
                                <option selected disabled>Select semester</option>
                                <option value="Non-Technical Term 1">Non-Technical Term 1</option>
                                <option value="Non-Technical Term 2">Non-Technical Term 2</option>
                                <option value="Semester 1">Technical Term 1</option>
                                <option value="Semester 2">Technical Term 2</option>
                            </select>
                        </div>
                    </div>
                    <!-- Row 4 -->
                    <div class="row mb-3">
                        <!-- Buttons -->
                        <div class="col-md-6">
                            <button type="button" id="save-draft-btn" class="btn btn-light w-100">Save Draft</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-light w-100">Publish</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <script>
    // Save Draft
        document.getElementById('save-draft-btn').addEventListener('click', function () {
            alert('Draft saved successfully!');
        });

    //  // Delete Course
    //  document.getElementById('delete-course-btn').addEventListener('click', function () {
    //         if (confirm('Are you sure you want to delete this course?')) {
    //             alert('Course deleted successfully!');
    //         }
    //     });
</script>
        <br><br>
        <!-- Existing Modules Section -->
        <div class="card">
            <div class="card-header text-center">Existing Modules</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Module Code</th>
                            <th>Module Title</th>
                            <th>Credits</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IN1120</td>
                            <td>Structured Programming I</td>
                            <td>2.50</td>
                            <td>Technical Term 1</td>
                            <td>
                                <button class="btn btn-light btn-sm">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>IN1301</td>
                            <td>Digital Systems and Digital Computers</td>
                            <td>3.00</td>
                            <td>Technical Term 1</td>
                            <td>
                                <button class="btn btn-light btn-sm">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>DI1002</td>
                            <td>Japanese for Beginners</td>
                            <td>2.00</td>
                            <td>Non-Technical Term 1</td>
                            <td>
                                <button class="btn btn-light btn-sm">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</x-app-layout>
