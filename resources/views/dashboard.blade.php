<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{url('enrol')}}">{{ __('Register') }} </a>
            &emsp;&emsp; 
        <a href="{{url('courses')}}">{{ __('Modules') }} </a>
     
        </h2>  
    </x-slot>
   
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            background-color: #fff;
            min-height: 250px; /* Consistent height */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .course-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            max-height: 120px; /* Limit image height */
        }
        .course-card h5 {
            margin: 8px 0;
            font-size: 1rem;
        }
        .course-card p {
            margin: 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        a {
        text-decoration: none; 
        color: inherit;     
    }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Semesters</h2>
            <button class="btn btn-outline-secondary">Filter</button>
        </div>

        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-md-3 mb-2">
                <select class="form-select">
                    <option value="all" selected>All</option>
                    <option value="active">Active</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="col-md-6 mb-2">
                <input type="text" class="form-control" placeholder="Search by semester">
            </div>
            <div class="col-md-3 mb-2">
                <select class="form-select">
                    <option value="summary" selected>Summary</option>
                    <option value="detailed">Detailed</option>
                </select>
            </div>
        </div>

        <!-- Course Overview -->
        <div class="row">
            <!-- Course Item -->
            <div class="col-md-4">
                <div class="course-card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" alt="Course Image">
                    <a href="{{url('courses')}}"><h5>2024 Technical Term 1 - Semester 1</h5></a>
                    <p>Faculty of Information Technology</p>
                    <p class="text-muted">0% Complete</p>
                </div>
            </div>
            <!-- Course Item -->
            <div class="col-md-4">
                <div class="course-card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" alt="Course Image">
                    <h5>2024 Non Technical Term 1 - Semester 1 	</h5>
                    <p>Faculty of Information Technology</p>
                    <p class="text-muted">0% Complete</p>
                </div>
            </div>
            <!-- Course Item -->
            <div class="col-md-4">
                <div class="course-card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" alt="Course Image">
                    <h5>2024 Technical Term 2 - Semester 2</h5>
                    <p>Faculty of Information Technology</p>
                    <p class="text-muted">0% Complete</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>

