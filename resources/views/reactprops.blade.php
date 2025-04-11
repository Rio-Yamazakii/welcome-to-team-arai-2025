<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React in Laravel</title>
    @viteReactRefresh
    @vite(['resources/js/app.jsx'])
    @vite('resources/css/app.css')
</head>
<body>
    <div class="p-8">
        <div id="form_title"></div>
        <div class="relative overflow-x-auto">
            <table class="w-96 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            名前
                        </th>
                        <th scope="col" class="px-6 py-3">
                            年齢
                        </th>
                        <th scope="col" class="px-6 py-3">
                            出身地
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            太郎
                        </td>
                        <td class="px-6 py-4">
                            25
                        </td>
                        <td class="px-6 py-4">
                            新潟
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>