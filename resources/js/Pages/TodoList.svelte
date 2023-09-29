<script>
    import { flip } from "svelte/animate";
    import { send, receive } from "../transition.js";

    export let todos;
    export let done;
</script>

<ul>
    {#each $todos.filter((todo) => todo.done === done) as todo (todo.id)}
        <li
            in:receive={{ key: todo.id }}
            out:send={{ key: todo.id }}
            animate:flip={{ duration: 200 }}
            class="bg-gray-200 mt-2 block rounded-md border-0 p-1.5 text-gray-900 shadow-sm {done ? 'opacity-50' : ''}"
        >
            <label class="flex justify-center gap-x-2">
                <input
                    type="checkbox"
                    checked={todo.done}
                    on:change={(e) => todos.mark(todo, e.currentTarget.checked)}
                />

                <span>{todo.description}</span>

                <button
                    on:click={() => todos.remove(todo)}
                    class="w-3"
                    aria-label="Remove"
                >
                    <img src="./remove.svg" alt="remove" />
                </button>
            </label>
        </li>
    {/each}
</ul>