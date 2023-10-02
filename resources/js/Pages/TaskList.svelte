<script>
    import { flip } from "svelte/animate";
    import { send, receive } from "../transition.js";

    export let tasks;
    export let done;

    function mark(task) {}

    function remove(task) {}
</script>

<ul>
    {#each tasks.filter((task) => task.done === done) as task (task.id)}
        <li
            class="bg-gray-200 mt-2 block rounded-md border-0 p-1.5 text-gray-900 shadow-sm {done
                ? 'opacity-50'
                : ''}"
        >
            <label class="flex justify-center gap-x-2">
                <input
                    in:receive={{ key: task.id }}
                    out:send={{ key: task.id }}
                    type="checkbox"
                    on:change={(e) => mark(task)}
                />

                <span>{task.description}</span>

                <button
                    class="w-3"
                    aria-label="Remove"
                    on:click={() => remove(task)}
                >
                    <img src="./remove.svg" alt="remove" />
                </button>
            </label>
        </li>
    {/each}
</ul>
