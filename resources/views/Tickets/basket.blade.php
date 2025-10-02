<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.4/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <section class="max-w-4xl mx-auto py-10">
        <h1 class="text-3xl font-semibold text-gray-900">Your Basket</h1>

        <div class="mt-6 overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr class="text-left text-sm font-semibold text-gray-600">
                        <th class="px-6 py-3">Ticket</th>
                        <th class="px-6 py-3">Qty</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3 text-right">Subtotal</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">Sneakerness VIP Pass</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <input type="number" value="1" min="1" class="w-20 rounded border border-gray-300 px-2 py-1 text-center text-sm">
                                <button class="rounded bg-indigo-600 px-3 py-1 text-xs font-semibold text-white hover:bg-indigo-500">Update</button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">€49.99</td>
                        <td class="px-6 py-4 text-right text-sm font-medium text-gray-900">€49.99</td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-sm font-semibold text-red-600 hover:text-red-500">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">General Admission</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <input type="number" value="2" min="1" class="w-20 rounded border border-gray-300 px-2 py-1 text-center text-sm">
                                <button class="rounded bg-indigo-600 px-3 py-1 text-xs font-semibold text-white hover:bg-indigo-500">Update</button>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700">€24.99</td>
                        <td class="px-6 py-4 text-right text-sm font-medium text-gray-900">€49.98</td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-sm font-semibold text-red-600 hover:text-red-500">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-8 flex flex-col items-end gap-4">
            <div class="text-right">
                <p class="text-sm text-gray-600">Subtotal</p>
                <p class="text-2xl font-semibold text-gray-900">€99.97</p>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-3">
            <a href="#" class="rounded border border-gray-300 px-5 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">Continue Shopping</a>
            <button class="rounded bg-green-600 px-5 py-2 text-sm font-semibold text-white hover:bg-green-500">Proceed to Checkout</button>
        </div>
    </section>
</body>
</html>
