<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration Details</title>
</head>

<body>
    <h2>Welcome, {{ $user->name }}</h2>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Registered at:</strong> {{ $user->created_at->format('Y-m-d H:i') }}</p>
</body>

</html>
