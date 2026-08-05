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
    <label class="block text-sm font-medium text-gray-700">Nama</label>
    <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}"
           class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Role/Keterangan</label>
    <input type="text" name="role" value="{{ old('role', $testimonial->role ?? '') }}" placeholder="Contoh: Pemilik kos, Denpasar"
           class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Isi Testimoni</label>
    <textarea name="quote" rows="4"
              class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">{{ old('quote', $testimonial->quote ?? '') }}</textarea>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
    <select name="rating" class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600">
        @for ($i = 5; $i >= 1; $i--)
            <option value="{{ $i }}" @selected(old('rating', $testimonial->rating ?? 5) == $i)>{{ $i }} bintang</option>
        @endfor
    </select>
</div>

<div class="flex items-center gap-2">
    <input type="checkbox" name="is_active" id="is_active" value="1"
           @checked(old('is_active', $testimonial->is_active ?? true))
           class="rounded border-gray-300 text-green-600 focus:ring-green-600">
    <label for="is_active" class="text-sm text-gray-700">Tampilkan di homepage</label>
</div>