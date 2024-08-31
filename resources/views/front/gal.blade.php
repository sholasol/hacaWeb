<x-admin-layout>
    @section('gallery')
        @foreach($images as $image)
            <div class="col-4">
                <img class="img-fluid bg-light p-1" src="{{ asset('asset/image/' . $image->image) }}" alt="{{ $image->name }}">
            </div>
        @endforeach
    @endsection
</x-admin-layout>