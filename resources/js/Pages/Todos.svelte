<script>
    import TodoList from "./TodoList.svelte";

    export let csrfToken;
    export let todos;
</script>

<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="text-center mx-auto max-w-2xl space-y-2">
        <div>
            <h1 class="text-2xl text-gray-700 font-bold">TODOS</h1>
            <form action="/" method="POST">
                <input type="hidden" name="_token" value={csrfToken} />
                <input
                    name="todo"
                    type="text"
                    placeholder="what needs to be done?"
                    required
                    autocomplete="off"
                    class="mt-2 block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                />
            </form>
        </div>

        <div>
            <h2 class="text-xl text-gray-700 font-bold">todo</h2>
            <TodoList {todos} done={false} />
        </div>

        <div>
            <h2 class="text-xl text-gray-700 font-bold">done</h2>
            <TodoList {todos} done={true} />
        </div>
    </div>
</div>
