<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{url('enrol')}}">{{ __('Register') }} </a>
            &emsp;&emsp; 
        <a href="{{url('courses')}}">{{ __('Calender') }} </a>
     
        </h2>  
    </x-slot>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Modules</title>
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
            <h2>My Modules</h2>
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
                <input type="text" class="form-control" placeholder="Search by module name">
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
            @foreach($courses as $course)

            <div class="col-md-4">
                <div class="course-card shadow-sm">
                    <img src="https://via.placeholder.com/350x150" alt="Course Image">
                    <h5>{{$course->code}} : </h5>
                    <h5> <a href="{{url('notes')}}">{{$course->title}} </a> </h5>
                    <!-- <h5>B21_Skills Sprints</h5> -->
                    <p>Faculty of Information Technology</p>
                    <p class="text-muted">0% Complete</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</x-app-layout>
