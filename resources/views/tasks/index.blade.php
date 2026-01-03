<!DOCTYPE html>
<html>
<head>
    <title>My Task List</title>
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
        
        .task-list {
            list-style: none;
            padding: 0;
        }
        
        .task-item {
            background-color: #f8f9fa;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
            transition: transform 0.2s;
        }
        
        .task-item:hover {
            transform: translateX(5px);
            background-color: #e9ecef;
        }
        
        .task-number {
            background-color: #667eea;
            color: white;
            padding: 5px 10px;
            border-radius: 50%;
            margin-right: 10px;
            font-weight: bold;
        }
        
        .home-link {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        
        .home-link:hover {
            text-decoration: underline;
        }
        .task-item.completed {
    background-color: #d4edda;
    border-left-color: #28a745;
    opacity: 0.8;
}

.task-title {
    flex-grow: 1;
}

.task-title.completed {
    text-decoration: line-through;
    color: #6c757d;
}

.button-group {
    display: flex;
    gap: 10px;
}

.complete-btn {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.complete-btn:hover {
    background-color: #218838;
}

.complete-btn.completed {
    background-color: #6c757d;
}

.delete-btn {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.delete-btn:hover {
    background-color: #c82333;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 My Task List</h1>

        <div style="text-align: center; margin-bottom: 20px;">
    <a href="/tasks/create" style="background-color: #667eea; color: white; padding: 10px 20px; text-decoration: none; border-radius: 8px; display: inline-block;">➕ Add New Task</a>
</div>
        
        <ul class="task-list">
            @foreach($tasks as $index => $task)
               <li class="task-item {{ $task->completed ? 'completed' : '' }}">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div class="task-title {{ $task->completed ? 'completed' : '' }}">
            <span class="task-number">{{ $index + 1 }}</span>
            @if($task->completed)
                ✅
            @endif
            {{ $task->title }}
        </div>
        
        <div class="button-group">
            <!-- Complete/Uncomplete Button -->
            <form action="/tasks/{{ $task->id }}/toggle" method="POST" style="margin: 0;">
                @csrf
                @method('PATCH')
                <button type="submit" class="complete-btn {{ $task->completed ? 'completed' : '' }}">
                    @if($task->completed)
                        ↩️ Undo
                    @else
                        ✓ Complete
                    @endif
                </button>
            </form>
            
            <!-- Delete Button -->
            <form action="/tasks/{{ $task->id }}" method="POST" style="margin: 0;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </div>
</li>
            @endforeach
        </ul>
        
        <a href="/hello" class="home-link">← Back to Home</a>
    </div>
</body>
</html>