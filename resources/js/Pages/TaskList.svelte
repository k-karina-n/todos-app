<script>
    import { router } from "@inertiajs/svelte";
    import { flip } from "svelte/animate";
    import { send, receive } from "../transition.js";

    export let tasks;
    export let done;

    function check(task) {
        router.put(`/tasks/${task}/check`);
    }

    function edit(task, body) {
        let values = {
            description: body,
        };
        router.put(`/tasks/${task}`, values);
    }

    function remove(task) {
        router.delete(`/tasks/${task}`);
    }
</script>

<ul>
    {#each tasks.filter((task) => task.done === done) as task (task.id)}
        <li
            in:receive={{ key: task.id }}
            out:send={{ key: task.id }}
            animate:flip={{ duration: 200 }}
            class="flex justify-center gap-x-2 bg-gray-200 mt-2 block rounded-md border-0 p-1.5 text-gray-900 shadow-sm
            {done ? 'opacity-50' : ''}"
        >
            <input type="checkbox" on:change={check(task.id)} />

            <input
                type="text"
                bind:value={task.description}
                on:change={edit(task.id, task.description)}
                class="bg-gray-200 focus:outline-none"
            />

            <button class="w-3" aria-label="Remove" on:click={remove(task.id)}>
                <img src="./trash.svg" alt="delete" />
            </button>
        </li>
    {/each}
</ul>
