<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaksi &raquo; {{ $transaction->product->name }} dari {{ $transaction->user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                    <div class="w-full md:w-1/6 px-4 mb-4 md:mb-0">
                        <img src="{{ $transaction->product->picturePath }}" alt="" class="w-full rounded">
                    </div>
                    <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                        <div class="flex flex-wrap mb-3">
                            <div class="w-2/6">
                                <div class="text-sm">Nama Produk</div>
                                <div class="text-xl font-bold">{{ $transaction->product->name }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Kuantitas</div>
                                <div class="text-xl font-bold">{{ number_format($transaction->quantity) }}</div>
                            </div>
                            <div class="w-2/6">
                                <div class="text-sm">Total</div>
                                <div class="text-xl font-bold">{{ number_format($transaction->total) }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Status</div>
                                <div class="text-md font-bold">
                                    @if ($transaction->status === 'PENDING')
                                        <p class="text-orange-500">{{ 'BELUM BAYAR' }}</p>
                                    @elseif($transaction->status === 'SUCCESS')
                                        <p class="text-green-500">{{ 'SUDAH BAYAR' }}</p>
                                    @elseif($transaction->status === 'DELIVERED')
                                        <p class="text-green-800">{{ 'PESANAN DITERIMA' }}</p>
                                    @elseif($transaction->status === 'ON_DELIVERY')
                                        <p class="text-black-500">{{ 'SEDANG DIKIRIM' }}</p>
                                    @elseif($transaction->status === 'CANCELLED')
                                        <p class="text-red-500">{{ 'DIBATALKAN' }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <div class="w-2/6">
                                <div class="text-sm">Nama User</div>
                                <div class="text-xl font-bold">{{ $transaction->user->name }}</div>
                            </div>
                            <div class="w-3/6">
                                <div class="text-sm">Email</div>
                                <div class="text-xl font-bold">{{ $transaction->user->email }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Kota</div>
                                <div class="text-xl font-bold">{{ $transaction->user->city }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <div class="w-4/6">
                                <div class="text-sm">Alamat</div>
                                <div class="text-xl font-bold">{{ $transaction->user->address }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Nomor Rumah</div>
                                <div class="text-xl font-bold">{{ $transaction->user->houseNumber }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Telepon</div>
                                <div class="text-xl font-bold">{{ $transaction->user->phoneNumber }}</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3">
                            <div class="w-5/6">
                                <div class="text-sm">Link Pembayaran</div>
                                <div class="text-lg">
                                    <a href="{{ $transaction->payment_url }}">{{ $transaction->payment_url }}</a>
                                </div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm mb-1">Ganti Status</div>
                                <a href="{{ route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'ON_DELIVERY']) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    DIKIRIM
                                </a>
                                <a href="{{ route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'DELIVERED']) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    DITERIMA
                                </a>
                                <a href="{{ route('transaction.changeStatus', ['id' => $transaction->id, 'status' => 'CANCELLED']) }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                    DIBATALKAN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
