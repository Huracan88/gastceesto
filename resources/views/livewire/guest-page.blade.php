<div>
    <!-- component -->
    <div class="sm:px-6 w-full mt-4">

        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">

            <div class="sm:flex items-center justify-between">

                <div class="flex">
                    <div class="block">

                        <div class="text-gray-700 mb-2 font-medium"> <i class="fa fa-filter">&nbsp;</i> Status</div>

                        <div class="flex items-center">

                            <div x-on:click="$wire.set('search_status', 'all')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                        @if($search_status == 'all') bg-rose-800 text-white @else bg-rose-100 text-gray-700 hover:text-rose-900 cursor-pointer @endif" >
                                <p>Todos</p>
                            </div>

                            <div x-on:click="$wire.set('search_status', 'registered')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_status == 'registered') bg-rose-800 text-white @else bg-rose-100 text-gray-700 hover:text-rose-900 cursor-pointer @endif" >
                                <p>Registrados</p>
                            </div>

                            <div x-on:click="$wire.set('search_status', 'pending')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_status == 'pending') bg-rose-800 text-white @else bg-rose-100 text-gray-700 hover:text-rose-900 cursor-pointer @endif" >
                                <p>Pendientes</p>
                            </div>

                            <i class="fa-solid fa-grip-lines-vertical text-rose-800 text-lg" ></i>

                        </div>
                    </div>

                    <div class="block ml-2">

                        <div class="text-gray-700 mb-2 font-medium"> <i class="fa fa-filter">&nbsp;</i> Zona</div>

                        <div class="flex items-center">

                            <div x-on:click="$wire.set('search_zone', 'all')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                        @if($search_zone == 'all') bg-blue-800 text-white @else bg-blue-100 text-gray-700 hover:text-blue-900 cursor-pointer @endif" >
                                <p>Todas</p>
                            </div>

                            <div x-on:click="$wire.set('search_zone', 'sur')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_zone == 'sur') bg-blue-800 text-white @else bg-blue-100 text-gray-700 hover:text-blue-900 cursor-pointer @endif" >
                                <p>Sur</p>
                            </div>

                            <div x-on:click="$wire.set('search_zone', 'centro')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_zone == 'centro') bg-blue-800 text-white @else bg-blue-100 text-gray-700 hover:text-blue-900 cursor-pointer @endif" >
                                <p>Centro</p>
                            </div>

                            <div x-on:click="$wire.set('search_zone', 'norte')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_zone == 'norte') bg-blue-800 text-white @else bg-blue-100 text-gray-700 hover:text-blue-900 cursor-pointer @endif" >
                                <p>Norte</p>
                            </div>

                            <i class="fa-solid fa-grip-lines-vertical text-rose-800 text-lg" ></i>

                        </div>


                    </div>

                    <div class="block ml-2">

                        <div class="text-gray-700 mb-2 font-medium"> <i class="fa fa-filter">&nbsp;</i> Antigüedad</div>

                        <div class="flex items-center">

                            <div x-on:click="$wire.set('search_years', 'all')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                        @if($search_years == 'all') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>Todas</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '20')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '20') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>20</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '25')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '25') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>25</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '30')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '30') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>30</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '35')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '35') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>35</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '40')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '40') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>40</p>
                            </div>

                            <div x-on:click="$wire.set('search_years', '45')"
                                 class="py-2 px-3 rounded-full mr-2 px-2 focus:outline-none text-sm
                                            @if($search_years == '45') bg-fuchsia-800 text-white @else bg-fuchsia-100 text-gray-700 hover:text-fuchsia-900 cursor-pointer @endif" >
                                <p>45</p>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-rose-900 mt-4 sm:mt-0 inline-flex items-start
                               justify-start px-6 py-3 bg-rose-800 hover:bg-rose-900 focus:outline-none rounded">
                    <a href="{{route('download-report')}}" target="_blank"
                        class="text-sm font-medium leading-none text-white"> <i class="fa fa-file-download">&nbsp;</i> Reporte</a>
                </button>
            </div>

            <div class="sm:flex items-center justify-between mt-4">
                <div class="flex items-center">
                        <i class="fa fa-filter">&nbsp;</i>
                        <x-input-label for="email" :value="__('Buscar')" />
                        <x-text-input wire:model.live="search_term" id="search_term" class="block mt-1 w-full" type="text" name="search_term" autofocus />
{{--                        <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}

                    <div   x-on:click="$wire.set('search_term', '')"
                            class="rounded bg-rose-800 text-white px-2 mx-4 focus:outline-2 inline-flex py-2 text-sm
                                cursor-pointer hover:bg-rose-600">
                        <i class="fa fa-eraser">&nbsp;</i> Borrar
                    </div>



                </div>
                <div wire:loading class="text-rose-800">
                    <i class="fa fa-rotate fa-spin">&nbsp;</i> Procesando ...
                </div>

            </div>


            <div class="mt-7 overflow-x-auto">

                <table class="w-full whitespace-nowrap">
                    <thead>
                        <tr class="h-14 border border-gray-100 rounded bg-rose-800 text-white">
                            <th class="px-2"> Emp. </th>
                            <th class="px-2"> Nombre </th>
                            <th class="px-2"> Nómina </th>
                            <th class="px-2"> Unidad </th>
                            <th class="px-2"> Antiguedad </th>
                            <th class="px-2"> Estado </th>
                            <th class="px-2"> <i class="fa fa-gear"></i> </th>
                        </tr>
                    </thead>
                    <tbody>


                    @foreach($records as $r)

                    <tr tabindex="0" class="focus:outline-none h-7 border border-gray-100 rounded">
                        <td class="px-2"> {{$r->employee}} </td>
                        <td class="px-2"> {{$r->name}} </td>
                        <td class="px-2 text-center"> {{$r->group}} </td>
                        <td class="px-2 text-center"> {{$r->unit}} </td>
                        <td class="px-2 text-center"> {{$r->years}} años </td>
                        <td class="px-2 text-center">
                            @if($r->status == 'pending')
                                <span class="px-3 py-3 rounded-full bg-yellow-300 text-xs text-orange-700">
                                    Pendiente
                                </span>
                            @endif

                            @if($r->status == 'registered')
                                <span class="px-3 py-3 rounded-full bg-green-700 text-xs text-emerald-100">
                                    Registrado
                                </span>
                            @endif
                        </td>

                        <td style="width:100px">
                            <div
                                wire:click="toggleStatus({{$r->id}})"
                                wire:confirm="¿Modificar el status de {{$r->name}}?"
                                class="rounded bg-rose-800 text-white text-center text-sm
                                        focus:outline-none focus:text-rose-600
                                        hover:bg-rose-600 py-4 px-4 cursor-pointer">
                               <i class="fa fa-pencil">&nbsp;</i>Modificar
                            </div>

                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                    <tfoot>
                        <td colspan="7" class="pt-4">
                            {{ $records->links() }}
                        </td>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

</div>
