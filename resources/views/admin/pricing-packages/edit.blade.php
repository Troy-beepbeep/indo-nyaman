<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Paket: {{ $pricingPackage->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('pricing-packages.update', $pricingPackage) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    @include('admin.pricing-packages._form')

                    <div class="pt-4">
                        <button type="submit" class="rounded-md bg-green-700 px-4 py-2 text-sm font-semibold text-white hover:bg-green-800">Perbarui</button>
                        <a href="{{ route('pricing-packages.index') }}" class="ml-2 text-sm text-gray-500 hover:underline">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>