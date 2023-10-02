<script>
    import { useForm } from "@inertiajs/svelte"
    import TaskList from "./TaskList.svelte"

    export let tasks

    let form = useForm({
        task: null,
        remember: false,
    });

    function submit() {
        $form.post('/tasks', {
            onSuccess: () => $form.reset('task'),
        })
    }
</script>

<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="text-center mx-auto max-w-2xl space-y-2">
        <div>
            <h1 class="text-2xl text-gray-700 font-bold">TASKS</h1>
            <form on:submit|preventDefault={submit}>
                <input
                    bind:value={$form.task}
                    type="text"
                    placeholder="what needs to be done?"
                    required
                    autocomplete="off"
                    class="mt-2 block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                />
            </form>
        </div>

        <div>
            <h2 class="text-xl text-gray-700 font-bold">task</h2>
            <TaskList {tasks} done={0} />
        </div>

        <div>
            <h2 class="text-xl text-gray-700 font-bold">done</h2>
            <TaskList {tasks} done={1} />
        </div>
    </div>
</div>
