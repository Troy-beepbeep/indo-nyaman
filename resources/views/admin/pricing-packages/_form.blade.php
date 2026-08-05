@if ($errors->any())
    <div class="rounded-md bg-red-50 p-4 text-sm text-red-700">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <label class="block text-sm font-medium text-gray-700">Nama Paket</label>
    <input type="text" name="name" value="{{ old('name', $pricingPackage->name ?? '') }}"
           class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Deskripsi Singkat</label>
    <input type="text" name="description" value="{{ old('description', $pricingPackage->description ?? '') }}"
           class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="text" name="price_text" value="{{ old('price_text', $pricingPackage->price_text ?? '') }}" placeholder="Contoh: 150rb"
               class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Suffix (opsional)</label>
        <input type="text" name="price_suffix" value="{{ old('price_suffix', $pricingPackage->price_suffix ?? '') }}" placeholder="Contoh: /bulan"
               class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
    </div>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Daftar Fitur</label>
    <p class="text-xs text-gray-500 mb-1">Satu fitur per baris (tekan Enter buat fitur baru)</p>
    <textarea name="features" rows="5"
              class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">{{ old('features', $pricingPackage->features ?? '') }}</textarea>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
    <input type="number" name="sort_order" value="{{ old('sort_order', $pricingPackage->sort_order ?? 0) }}" min="0"
           class="mt-1 w-24 rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div class="flex items-center gap-2">
    <input type="checkbox" name="is_featured" id="is_featured" value="1"
           @checked(old('is_featured', $pricingPackage->is_featured ?? false))
           class="rounded border-gray-300 text-green-600 focus:ring-green-600">
    <label for="is_featured" class="text-sm text-gray-700">Tandai sebagai "Paling Diminati"</label>
</div>

<div class="flex items-center gap-2">
    <input type="checkbox" name="is_active" id="is_active" value="1"
           @checked(old('is_active', $pricingPackage->is_active ?? true))
           class="rounded border-gray-300 text-green-600 focus:ring-green-600">
    <label for="is_active" class="text-sm text-gray-700">Tampilkan di homepage</label>
</div>