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
    <label class="block text-sm font-medium text-gray-700">Label</label>
    <input type="text" name="label" value="{{ old('label', $galleryItem->label ?? '') }}" placeholder="Contoh: Deep Cleaning Rumah"
           class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Kategori</label>
    <select name="tag" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
        @foreach (['Cleaning', 'Garden'] as $option)
            <option value="{{ $option }}" @selected(old('tag', $galleryItem->tag ?? '') == $option)>{{ $option }}</option>
        @endforeach
    </select>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Foto</label>
    @if (isset($galleryItem) && $galleryItem->image)
        <img src="{{ $galleryItem->image_url }}" alt="{{ $galleryItem->label }}" class="mt-2 mb-2 h-32 w-32 rounded-lg object-cover">
        <p class="mb-2 text-xs text-gray-500">Upload foto baru buat ganti, atau biarin kosong buat pertahankan foto ini.</p>
    @endif
    <input type="file" name="image" accept="image/*"
           class="mt-1 w-full text-sm text-gray-600 file:mr-4 file:rounded-md file:border-0 file:bg-green-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-green-700 hover:file:bg-green-100">
</div>

<div class="flex items-center gap-2">
    <input type="checkbox" name="is_active" id="is_active" value="1"
           @checked(old('is_active', $galleryItem->is_active ?? true))
           class="rounded border-gray-300 text-green-600 focus:ring-green-600">
    <label for="is_active" class="text-sm text-gray-700">Tampilkan di homepage</label>
</div>