<x-layout>
 
    <div class="container mx-auto mt-[10rem] p-6 bg-white rounded border border-gray-200 round-[8px]">
       Download: <h1 class="text-2xl font-bold uppercase">{{ $book->course_code }} </h1><span> {{ $book->course_title }}</span>
        
        <p class="text-gray-700 mt-4">{{ $book->description }}</p>

        <a
            href="{{ asset('storage/' . $book->file_path) }}"
            class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
            download
        >
            Download Course Material
        </a>
    </div>



</x-layout>