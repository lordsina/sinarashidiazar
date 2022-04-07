@extends('layouts.app')

@section('content')

<div class="container bg-cyan-600/[.2] mx-auto  text-center  py-10 px-5 rounded-lg">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                         نام
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام خانوادگی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        a3
                    </th>
                    <th scope="col" class="px-6 py-3">
                        a4
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        sina
                    </th>
                    <td class="px-6 py-4">
                        rashidi
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>
                    <td class="px-6 py-4">
                        4
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        محمد
                    </th>
                    <td class="px-6 py-4">
                        علی
                    </td>
                    <td class="px-6 py-4">
                        ۴
                    </td>
                    <td class="px-6 py-4">
                        ۶
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        سارا
                    </th>
                    <td class="px-6 py-4">
                        بیگی
                    </td>
                    <td class="px-6 py-4">
                        ۴
                    </td>
                    <td class="px-6 py-4">
                        ۲
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
     