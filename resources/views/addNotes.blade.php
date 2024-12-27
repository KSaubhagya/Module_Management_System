<x-app-layout>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-section {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #f9f9f9;
        }
        .course-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .course-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0.8rem;
            margin-top: 0.5rem;
            background-color: #fff;
        }
        .collapse-btn {
            color: #007bff;
            cursor: pointer;
        }
        a {
        text-decoration: none; 
        color: inherit;      
       }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Course Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 id="course-title">IN1120 - Software Programming I</h3>
            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCourseTitleModal">
            <a href="{{url('addModule')}}"> Edit Module </a>
           </button>
        </div>

        <!-- Course Details Section -->
        <div class="course-section">
            <div class="course-header">
                <h5>Course Details</h5>
                <span class="collapse-btn" data-bs-toggle="collapse" data-bs-target="#course-details-section">Collapse</span>
            </div>
            <div id="course-details-section" class="collapse show">
                <div class="course-item">
                    <strong>Course Description:</strong>
                    <span id="course-description">A detailed study of OOP concepts and java threads</span>
                   
                </div>
                <div class="course-item">
                    <strong>Instructor:</strong>
                    <span id="course-instructor">Dr. John Doe</span>
                    
                </div>
                <div class="course-item">
                    <strong>Duration:</strong>
                    <span id="course-duration">12 weeks</span>
                   
                </div>
            </div>
        </div>

        <!-- General Section -->
        <div class="course-section">
            <div class="course-header">
                <h5>General</h5>
                <span class="collapse-btn" data-bs-toggle="collapse" data-bs-target="#general-section">Collapse</span>
            </div>
            <div id="general-section" class="collapse show">
                <div class="course-item">
                    <div>
                        <img src="https://via.placeholder.com/30" alt="icon">
                        Student Feedback - End Semester
                    </div>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editResourceModal">Edit</button>
                </div>
                <div class="course-item">
                    <div>
                        <img src="https://via.placeholder.com/30" alt="icon">
                        Zoom link for online lectures
                    </div>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editResourceModal">Edit</button>
                </div>
            </div>
        </div>

        <!-- Course Materials Section -->
        <div class="course-section">
            <div class="course-header">
                <h5>Course Materials</h5>
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addMaterialModal">Add Material</button>
            </div>
            <div id="materials-list">
                <!-- Dynamically added materials will appear here -->
            </div>
        </div>

       
        <br><br>
    </div>

    <!-- Modal for Adding Material -->
    <div class="modal fade" id="addMaterialModal" tabindex="-1" aria-labelledby="addMaterialModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMaterialModalLabel">Add Course Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="material-name-input" class="form-label">Material Name</label>
                            <input type="text" class="form-control" id="material-name-input">
                        </div>
                        <div class="mb-3">
                            <label for="material-link-input" class="form-label">Material Link</label>
                            <input type="text" class="form-control" id="material-link-input">
                        </div>
                        <button type="button" class="btn btn-primary" id="save-material-btn">Add Material</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add Course Material
        document.getElementById('save-material-btn').addEventListener('click', function () {
            const name = document.getElementById('material-name-input').value;
            const link = document.getElementById('material-link-input').value;

            if (name && link) {
                const materialItem = document.createElement('div');
                materialItem.classList.add('course-item');
                materialItem.innerHTML = `
                    <div>
                        <a href="${link}" target="_blank">${name}</a>
                    </div>
                    <button class="btn btn-outline-danger btn-sm">Remove</button>
                `;
                document.getElementById('materials-list').appendChild(materialItem);

                const removeBtn = materialItem.querySelector('button');
                removeBtn.addEventListener('click', function () {
                    materialItem.remove();
                });

                // Clear inputs and close modal
                document.getElementById('material-name-input').value = '';
                document.getElementById('material-link-input').value = '';
                const addMaterialModal = bootstrap.Modal.getInstance(document.getElementById('addMaterialModal'));
                addMaterialModal.hide();
            } else {
                alert('Please fill in all fields.');
            }
        });

        
       
    </script>
</body>
</x-app-layout>
