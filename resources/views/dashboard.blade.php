<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- <div class="px-2">
          <h1 class="text-2xl mb-4 font-bold text-gray-900">Statistik</h1>
          
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
        </div> --}}
          
            <div class="flex flex-wrap -mx-5 px-3">
                <!-- card1 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-lg rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                      <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                          <div>
                            <p class="mb-0 font-semibold leading-normal text-sm">Total Data</p>
                            <h5 class="mb-0 font-bold text-primary text-3xl">
                              {{ $data['total'] }}
                              {{-- {{ $count = DB::table('users')->count() }} --}}
                              {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span> --}}
                            </h5>
                          </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                          <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fas fa-users text-white leading-none text-lg relative top-3.5"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- card2 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-lg rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                      <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                          <div>
                            <p class="mb-0 font-semibold leading-normal text-sm">Rata-Rata</p>
                            <h5 class="mb-0 font-bold text-primary text-3xl">
                              {{ $data['mean'] }}
                              {{-- {{ $count = DB::table('posts')->count() }} --}}
                              {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span> --}}
                            </h5>
                          </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                          <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fas fa-network-wired text-white leading-none text-lg relative top-3.5"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- card3 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-lg rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                      <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                          <div>
                            <p class="mb-0 font-semibold leading-normal text-sm">Data Minimum</p>
                            <h5 class="mb-0 font-bold text-primary text-3xl">
                              {{ $data['min'] }}
                              {{-- {{ $count = DB::table('roles')->count() }} --}}
                              {{-- <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span> --}}
                            </h5>
                          </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                          <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fas fa-users text-white leading-none text-lg relative top-3.5"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- card4 -->
                <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-lg rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                      <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                          <div>
                            <p class="mb-0 font-semibold leading-normal text-sm">Data Maksimum</p>
                            <h5 class="mb-0 font-bold text-primary text-3xl">
                              {{ $data['max'] }}
                              {{-- {{ $count = DB::table('permissions')->count() }} --}}
                              {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span> --}}
                            </h5>
                          </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                          <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fas fa-network-wired text-white leading-none text-lg relative top-3.5"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="py-4">
              <div class="max-w-7xl mx-auto px-1 p-4">
                  <div class="overflow-hidden shadow-sm rounded-lg">
                      <div class="p-8 bg-white border-b border-gray-200">
                          <livewire:front.post-list-livewire />
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</x-app-layout>