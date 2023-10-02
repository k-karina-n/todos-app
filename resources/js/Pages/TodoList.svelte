<script>
    import { flip } from "svelte/animate";
    import { send, receive } from "../transition.js";

    export let todos;
    export let done;

    function mark(todo) {}

    function remove(todo) {}
</script>

<ul>
    {#each todos.filter((todo) => todo.done === done) as todo (todo.id)}
        <li
            class="bg-gray-200 mt-2 block rounded-md border-0 p-1.5 text-gray-900 shadow-sm {done
                ? 'opacity-50'
                : ''}"
        >
            <label class="flex justify-center gap-x-2">
                <input
                    in:receive={{ key: todo.id }}
                    out:send={{ key: todo.id }}
                    type="checkbox"
                    on:change={(e) => mark(todo)}
                />

                <span>{todo.description}</span>

                <button
                    class="w-3"
                    aria-label="Remove"
                    on:click={() => remove(todo)}
                >
                    <img src="./remove.svg" alt="remove" />
                </button>
            </label>
        </li>
    {/each}
</ul>
