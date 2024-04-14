<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <p>{{ $body }}</p>
    <div class="credentials">
        <p>Registration Number: {{ $student->reg_no }}</p>
        <p>Password: {{ $student->unhashed_password }}</p>
    </div>
</body>
</html>
