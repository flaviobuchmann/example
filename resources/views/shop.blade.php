<x-layout>
    <x-slot:heading>
        Shop
    </x-slot:heading>

    <h1 class="font-bold">Browse the available Items</h1>
    <ul class="pt-10">
        @foreach ($items as $item)
        <li class="mb-4">
            <div class="flex items-center">
                <p>{{ $item['name'] }}</p>
                <p class="ml-5">${{ $item['Price'] }}</p>
            </div>
            <p>Sold by Seller: <span class="text-blue-500 underline">{{ $item['seller_id'] }}</span></p>
        </li>
        @endforeach
    </ul>

</x-layout>
