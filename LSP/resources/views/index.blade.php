<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chores App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-[#2C2C54] text-white font-sans p-4">

    <!-- Judul dan Form -->
    <div class="mb-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">🟠 CHORES</h1>
        </div>
        <form id="addTaskForm" class="flex items-center gap-2" method="POST">
            @csrf
            <input id="taskInput" name="title" type="text" placeholder="Add Item"
                class="flex-1 p-2 rounded bg-[#3A3A6A] text-white focus:outline-none" />
            <button type="submit"
                class="bg-[#4F4F88] hover:bg-[#5F5FA0] text-white px-3 py-2 rounded-full text-lg">+</button>
        </form>
    </div>

    <!-- Daftar Tugas -->
    <div>
        <h2 class="text-sm text-gray-300 mb-2">TO DO</h2>
        <div id="todoList" class="space-y-2"></div>

        <h2 class="text-sm text-gray-300 mt-6 mb-2">COMPLETED</h2>
        <div id="completedList" class="space-y-2"></div>
    </div>

    <script>
        const tasks = @json($tasks);

        function renderTasks() {
            const todoList = document.getElementById('todoList');
            const completedList = document.getElementById('completedList');
            todoList.innerHTML = '';
            completedList.innerHTML = '';

            tasks.forEach((task) => {
                const taskItem = document.createElement('div');
                taskItem.className = 'flex items-center justify-between p-3 rounded bg-[#3A3A6A]';

                const label = document.createElement('label');
                label.className = 'flex items-center gap-2 flex-1';
                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.checked = task.completed;
                checkbox.onclick = () => toggleTask(task.id);
                label.appendChild(checkbox);

                const title = document.createElement('span');
                title.textContent = task.title;
                title.className = task.completed ? 'line-through text-gray-400' : '';
                label.appendChild(title);
                taskItem.appendChild(label);

                const rightControls = document.createElement('div');
                rightControls.className = 'flex items-center gap-3';

                if (task.date) {
                    const date = document.createElement('span');
                    date.className = 'text-sm text-gray-400';
                    date.textContent = task.date;
                    rightControls.appendChild(date);
                }

                const deleteBtn = document.createElement('button');
                deleteBtn.innerHTML = '🗑️';
                deleteBtn.className = 'text-red-400 hover:text-red-600 text-lg';
                deleteBtn.onclick = () => deleteTask(task.id);
                rightControls.appendChild(deleteBtn);

                taskItem.appendChild(rightControls);

                (task.completed ? completedList : todoList).appendChild(taskItem);
            });
        }

        function toggleTask(id) {
            fetch('/toggle', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        id
                    })
                }).then(res => res.json())
                .then(data => {
                    if (data.success) {
                        const task = tasks.find(t => t.id === id);
                        if (task) task.completed = !task.completed;
                        renderTasks();
                    }
                });
        }

        function deleteTask(id) {
            if (confirm("Are you sure you want to delete this task?")) {
                fetch('/delete', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            id
                        })
                    }).then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            const index = tasks.findIndex(t => t.id === id);
                            if (index !== -1) {
                                tasks.splice(index, 1);
                                renderTasks();
                            }
                        }
                    });
            }
        }

        document.getElementById('addTaskForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = document.getElementById('taskInput');
            const title = input.value.trim();
            if (title) {
                fetch('/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        title
                    })
                }).then(() => {
                    location.reload(); // Refresh to get updated tasks from backend
                });
            }
        });

        renderTasks();
    </script>
</body>

</html>