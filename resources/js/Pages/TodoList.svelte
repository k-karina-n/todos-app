<script>
    export let todos;
    export let done;
</script>

<ul class="todos">
    {#each todos as todo}
        <li class="bg-gray-200 mt-2 block rounded-md border-0 p-1.5 text-gray-900 shadow-sm">
            <label class="flex justify-center gap-x-2">
                <input type="checkbox" />
                <span>{todo.description}</span>
                <button class="w-3" aria-label="Remove">
                    <img src="./remove.svg" alt="remove">
                </button>
            </label>
        </li>
    {/each}
</ul>

