<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center relative">
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('product.index') }}">Produk</a>
                @if ($newProducts > 0)
                    <span class="absolute top-0 transform translate-x-1/2 -translate-y-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        {{ $newProducts }}
                    </span>
                @endif
            </h2>
        </div>
        <hr>
    </div>

    <div>
        <div class="flex items-center relative">
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('transaction.index') }}">Transaksi</a>
                @if ($newTransactions > 0)
                    <span class="absolute top-0 transform translate-x-1/2 -translate-y-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        {{ $newTransactions }}
                    </span>
                @endif
            </h2>
        </div>
        <hr>
    </div>

    <div>
        <div class="flex items-center relative">
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('users.index') }}">Users</a>
                @if ($newUsers > 0)
                    <span class="absolute top-0 transform translate-x-1/2 -translate-y-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        {{ $newUsers }}
                    </span>
                @endif
            </h2>
        </div>
        <hr>
    </div>

    <div>
        <div class="flex items-center">
            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="#">Profil</a>
            </h2>
        </div>
        <hr>
    </div>
</div>
