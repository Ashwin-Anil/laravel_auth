<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #1b99ed;
            padding: 10px;
            text-align: center;
            color: #ffffff;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            padding: 20px;
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .dashboard-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .image-upload {
    border: 2px dashed #aaa; /* Add a dashed border with a color of your choice */
    padding: 20px; /* Add some padding for better visual appearance */
    text-align: center; /* Center align the content */
}

.image-upload:hover {
    border-color: #555; /* Change border color on hover */
}

.image-upload input[type="file"] {
    display: none; /* Hide the file input */
}

.image-upload label {
    cursor: pointer; /* Change cursor to pointer for better UX */
}

.image-upload button {
    margin-top: 10px; /* Add some space between file input and button */
    background-color: #4CAF50; /* Green button color */
    color: #fff; /* White text color */
    padding: 10px 20px; /* Add padding for better button appearance */
    border: none; /* Remove button border */
    border-radius: 5px; /* Add border radius for rounded corners */
    cursor: pointer; /* Change cursor to pointer */
}

.image-upload button:hover {
    background-color: #45a049; /* Darker green color on hover */
}


    </style>
    <title>User Dashboard</title>
</head>
<body>




@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif




<nav>
    <a href="#">Home</a>
    <a href="{{ route('userin') }}">Profile</a>
    <a href="#">Settings</a>
    <a href="{{ route('logout') }}">Logout</a>
</nav>
<h2 style="margin-left: 45%">User Dashboard</h2>

@if(session()->has('success'))
    Welcome, {{ session('user')->name }}
@endif

<section>
    <div class="dashboard-content">
        @if(session()->has('user'))
        <p class="welcome-message">  Welcome, {{ session('user')->name }}!</p>
        @endif
        {{ auth()->user()->name }}
        <!-- Add your dashboard content here -->

        <div class="image-upload">

            <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <button type="submit">Upload</button>
                </form>
            </div>





    </div>

</section>

</body>
</html>
