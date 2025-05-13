@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
    @csrf

    <x-flux::input label="Nama Produk" name="name" value="{{ old('name') }}" class="text-black placeholder-gray-500" label-class="text-black" required />
    <x-flux::textarea label="Deskripsi" name="description" class="text-black placeholder-gray-500" label-class="text-black" >{{ old('description') }}</x-flux::textarea>
    <x-flux::input label="Harga" name="price" type="number" value="{{ old('price') }}" class="text-black placeholder-gray-500" label-class="text-black" required />
    <x-flux::input label="Stok" name="stock" type="number" value="{{ old('stock') }}" class="text-black placeholder-gray-500" label-class="text-black" required />

    <select name="category_id" class="w-full p-2 border rounded text-black" required>
        <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
        <option value="{{ $category->id }}"
            {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
     @endforeach
    </select>

    <x-flux::button type="submit">Simpan</x-flux::button>
    <a href="{{ route('products.index') }}">
        <x-flux::button color="gray">Batal</x-flux::button>
    </a>
</form>

</div>
@endsection
