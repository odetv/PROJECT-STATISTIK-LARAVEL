<div class="container p-4 mx-auto">
    <h1 class="text-2xl mb-4 font-bold text-gray-900">Statistik Nilai Data Publik</h1>
    <div class="card-body">
        <p class="mb-4">
          Statistika adalah ilmu yang mempelajari bagaimana merencanakan, mengumpulkan, menganalisis,
          menginterpretasi, dan mempresentasikan data. Singkatnya, statistika adalah ilmu yang berkenaan dengan
          data. Istilah 'statistika' (bahasa Inggris: statistics) berbeda dengan 'statistik' (statistic).
          Statistika merupakan ilmu yang berkenaan dengan data, sedang statistik adalah data, informasi, atau
          hasil penerapan algoritme statistika pada suatu data. Dari kumpulan data, statistika dapat digunakan
          untuk menyimpulkan atau mendeskripsikan data; ini dinamakan statistika deskriptif. Sebagian besar konsep
          dasar statistika mengasumsikan teori probabilitas. Beberapa istilah statistika antara lain: populasi,
          sampel, unit sampel, dan probabilitas.
          </p>
      </div>
    <div class="flex mb-4 mt-2">
        @auth
            <x-button sky href="{{ route('posts.index') }}" label="Lihat Data" />
        @else
            <x-button sky href="{{ route('dashboard') }}" label="Lihat Statistik" />
        @endauth
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
        <table class="w-full table-auto">
            <thead class="border-b bg-gray-800">
                <tr>
                    {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th> --}}
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('No') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('NIM') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Nama') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Nilai') }}
                    </th>
                    {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Mean') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Median') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Modus') }}
                    </th> --}}
                    {{-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Created At') }}
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                        {{ __('Updated At') }}
                    </th> --}}
                </tr>
            </thead class="border-b">
            <tbody>
                <?php $no = 1; ?>
                @forelse ($posts as $post)
                <tr class="bg-white border-b">
                    {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        <div class="flex items-center">
                            <input type="checkbox" value="{{ $post->id }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                    </td> --}}
                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{-- {{ $post->id }} --}}
                        {{ $no++ }}
                    </td>
                    <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->slug }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->title }}
                    </td>
                    <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->description }}
                    </td>
                    {{-- <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->title * $post->slug * $post->description / 3 }}
                    </td>
                    <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->title + $post->slug + $post->description / 2 }}
                    </td>
                    <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->title + $post->slug - $post->description }}
                    </td> --}}
                    {{-- <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->created_at }}
                    </td>
                    <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $post->updated_at }}
                    </td> --}}
                </tr class="bg-white border-b">
                @empty
                <tr class="text-center">
                    <td colspan="10" class="p-5"><span>No Posts Found</span></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @auth
        
    @else
    <div class="flex flex-row justify-between">
        <div class="card-body">
            <p class="mt-4">
                <p class="font-bold">AKUN DUMMY</p>
                <p class="mt-2 font-semibold">Admin</p>
                <p>Login : admin@gmail.com</p>
                <p>Password : Password</p>
                <p class="mt-2 font-semibold">User</p>
                <p>Login : user@gmail.com</p>
                <p>Password : Password</p>
            </p>
        </div>
        {{-- <div class="card-body">
            <p class="mt-4">
                <p class="font-bold">STATISTIK</p>
                <p>Total Data : {{ $data['total'] }}</p>
                <p>Rata-Rata : {{ $data['mean'] }}</p>
                <p>Nilai Minimum : {{ $data['min'] }}</p>
                <p>Nilai Maksimum : {{ $data['max'] }}</p>
            </p>
        </div> --}}
    </div>
    @endauth
</div>