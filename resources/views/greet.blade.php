<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
    <style>
        body {
            background-color: #e3f2fd;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        
        h1 {
            color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👋 Hello, {{ $name }}!</h1>
        <p>Welcome to Laravel! This page was created just for you.</p>
    </div>
</body>
</html>