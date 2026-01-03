<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: Arial, sans-serif;
            padding: 50px;
            min-height: 100vh;
        }
        
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 600px;
            margin: 0 auto;
        }
        
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
        }
        
        button {
            background-color: #667eea;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }
        
        button:hover {
            background-color: #5568d3;
        }
        
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #667eea;
            text-decoration: none;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>➕ Add New Task</h1>
        
        <form action="/tasks" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Task Description:</label>
                <input type="text" id="title" name="title" placeholder="Enter your task..." required>
            </div>
            
            <button type="submit">Add Task</button>
        </form>
        
        <a href="/tasks" class="back-link">← Back to Task List</a>
    </div>
</body>
</html>