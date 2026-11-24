
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Task | Task Manager</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen bg-slate-950 text-white">

    <div class="min-h-screen flex items-center justify-center p-4 sm:p-8">

        <div class="w-full max-w-3xl rounded-2xl border border-slate-800 bg-slate-900 p-6 sm:p-8 shadow-2xl">

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold tracking-tight">
                    Create New Task
                </h1>

                <p class="mt-2 text-sm text-slate-400">
                    Add a new task and assign it to your team.
                </p>
                <a href="">Task List</a>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">

                <!-- Task Name -->
                <div>
                    <label for="taskname" class="mb-2 block text-sm font-medium">
                        Task Name <span class="text-red-400">*</span>
                    </label>

                    <input
                        type="text"
                        id="taskname"
                        name="taskname"
                        placeholder="Enter task name"
                        required
                        class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                    >
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="mb-2 block text-sm font-medium">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        placeholder="Enter task description..."
                        class="w-full resize-none rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none transition placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                    ></textarea>
                </div>

                <!-- Project and Assigned To -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                    <div>
                        <label for="project" class="mb-2 block text-sm font-medium">
                            Project
                        </label>

                        <select
                            id="project"
                            name="project"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                            <option value="">Select Project</option>
                            <option value="task-manager">Task Manager</option>
                            <option value="crm">CRM Application</option>
                            <option value="pharmacy">Pharmacy SaaS</option>
                        </select>
                    </div>

                    <div>
                        <label for="assigned_to" class="mb-2 block text-sm font-medium">
                            Assigned To
                        </label>

                        <select
                            id="assigned_to"
                            name="assigned_to"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                            <option value="">Select Member</option>
                            <option value="1">Anand</option>
                            <option value="2">Developer 1</option>
                            <option value="3">Designer 1</option>
                        </select>
                    </div>

                </div>

                <!-- Priority and Status -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                    <div>
                        <label for="priority" class="mb-2 block text-sm font-medium">
                            Priority
                        </label>

                        <select
                            id="priority"
                            name="priority"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                            <option value="low">Low</option>
                            <option value="medium" selected>Medium</option>
                            <option value="high">High</option>
                            <option value="urgent">Urgent</option>
                        </select>
                    </div>

                    <div>
                        <label for="status" class="mb-2 block text-sm font-medium">
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                            <option value="todo" selected>To Do</option>
                            <option value="in_progress">In Progress</option>
                            <option value="review">Review</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                </div>

                <!-- Dates -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                    <div>
                        <label for="start_date" class="mb-2 block text-sm font-medium">
                            Start Date
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                    <div>
                        <label for="due_date" class="mb-2 block text-sm font-medium">
                            Due Date
                        </label>

                        <input
                            type="date"
                            id="due_date"
                            name="due_date"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                        >
                    </div>

                </div>

                <!-- Estimated Hours -->
                <div>
                    <label for="estimated_hours" class="mb-2 block text-sm font-medium">
                        Estimated Hours
                    </label>

                    <input
                        type="number"
                        id="estimated_hours"
                        name="estimated_hours"
                        min="0"
                        step="0.5"
                        placeholder="e.g. 5"
                        class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm outline-none placeholder:text-slate-500 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20"
                    >
                </div>

                <!-- Attachment -->
                <div>
                    <label for="attachment" class="mb-2 block text-sm font-medium">
                        Attachment
                    </label>

                    <input
                        type="file"
                        id="attachment"
                        name="attachment"
                        class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-sm text-slate-400 file:mr-4 file:rounded-md file:border-0 file:bg-blue-600 file:px-4 file:py-2 file:text-sm file:font-medium file:text-white hover:file:bg-blue-700"
                    >
                </div>

                <!-- Buttons -->
                <div class="flex flex-col-reverse gap-3 border-t border-slate-800 pt-6 sm:flex-row sm:justify-end">

                    <button
                        type="reset"
                        class="rounded-lg border border-slate-700 px-6 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-800"
                    >
                        Reset
                    </button>

                    <button
                        type="submit"
                        class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-slate-900"
                    >
                        Create Task
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
