<!DOCTYPE html>
<html>

<head>
    <title>Form Using Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Form Using Blade Components</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('form.submit') }}" method="POST">
            @csrf

            <x-input-text label="Full Name" name="name" />
            <x-input-text label="Email Address" name="email" type="email" />
            <x-input-text label="Password" name="password" type="password" />
            <x-input-text label="Age" name="age" type="number" />
            <x-input-text label="Date of Birth" name="dob" type="date" />
            <x-input-text label="Favorite Color" name="color" type="color" />
            <x-input-text label="Upload Resume" name="resume" type="file" />

            <x-input-checkbox label="Skills" name="skills" />
            <x-input-radio label="Gender" name="gender" />
            <x-input-select label="Country" name="country" />
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
