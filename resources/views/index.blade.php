<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List Keren</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gray: {
                            800: '#18181b', // Zinc-800 for light mode
                        },
                    },
                },
            },
            darkMode: 'class', // Enable dark mode via a CSS class
        }
    </script>
</head>

<body class="dark text-white bg-zinc-900 font-mono" id="body">

    <div id="content" class="mx-auto" style="max-width:500px;">
        @livewire('todo-list')
    </div>
</body>
</html>
