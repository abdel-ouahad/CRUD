@extends('home')
@section('main')
<h1 class="my-5 text-4xl font-extrabold leading-none  text-gray-900 md:text-5xl lg:text-6xl dark:text-gray mx-auto text-center">Add New Record</h1>
<form action="{{ route('table.update', ['table' => $table->id]) }}" class="max-w-sm mx-auto mt-5" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-5">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-GRAY">PRODUCT NAME</label>
        <input type="text" id="ProductName" name="ProductName" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$table->ProductName}}">
    </div>
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-GRAY">COLOR</label>
        <input type="text" id="COLOR" name="COLOR" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$table->Color}}">
    </div>
    <div class="mb-5">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-GRAY">CATEGORY</label>
        <input type="text" id="CATEGORY" name="CATEGORY" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$table->Category}}">
    </div>
    <div class="mb-5">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-GRAY">PRICE</label>
        <input type="text" id="PRICE" name="PRICE" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$table->Price}}">
    </div>
    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">submit</button>
</form>
@endsection