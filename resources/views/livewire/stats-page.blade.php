<div>

    <div class="sm:px-6 w-full mt-4">

        <div class="bg-white py-2 md:py-5 px-2 md:px-4 xl:px-10 mb-2">

            <div class="py-2 text-lg font-bold">Por status global</div>

            @php $groups = $records->groupBy('status')->sortBy('status'); @endphp

            <div class="sm:flex items-center h-14 py-4 ">
                <div class="text-rose-900 px-2 w-30 font-bold">Pendientes</div>
                <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['pending'] ?? [])}}</div>
                @php $porcentaje = round( count($groups['pending'] ?? []) /count($records) * 100 ,1); @endphp
                <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>

                <div class="text-rose-900 px-2 w-30 font-bold ml-4">Registrados</div>
                <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['registered'] ?? [])}}</div>
                @php $porcentaje = round( count($groups['registered'] ?? []) /count($records) * 100 ,1); @endphp
                <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>
            </div>


        </div>

        <div class="bg-white py-2 md:py-5 px-2 md:px-4 xl:px-10 mb-2">

            <div class="py-2 text-lg font-bold">Por Zona </div>

            @php $zones = $records->groupBy('zone')->sortBy('zone'); @endphp

            @foreach($zones as $name=>$items)

                @php $groups = $items->groupBy('status')->sortBy('status'); @endphp

                <div class="sm:flex items-center h-14">
                    <div class="text-rose-900 px-2 w-40 font-bold">{{$name}} </div>

                    <div class="text-rose-900 px-2 w-30 font-bold">Pendientes</div>
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['pending'] ?? [])}}</div>
                    @php $porcentaje = round( count($groups['pending'] ?? []) /count($records) * 100 ,1); @endphp
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>

                    <div class="text-rose-900 px-2 w-30 font-bold ml-4">Registrados</div>
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['registered'] ?? [])}}</div>
                    @php $porcentaje = round( count($groups['registered'] ?? []) /count($records) * 100 ,1); @endphp
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>

                </div>
            @endforeach

        </div>

        <div class="bg-white py-2 md:py-5 px-2 md:px-4 xl:px-10 mb-2">

            <div class="py-2 text-lg font-bold">Por Unidad </div>

            @php $zones = $records->groupBy('unit')->sortBy('unit'); @endphp

            @foreach($zones as $name=>$items)

                @php $groups = $items->groupBy('status')->sortBy('status'); @endphp

                <div class="sm:flex items-center h-14">
                    <div class="text-rose-900 px-2 w-40 font-bold">{{$name}} </div>

                    <div class="text-rose-900 px-2 w-30 font-bold">Pendientes</div>
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['pending'] ?? [])}}</div>
                    @php $porcentaje = round( count($groups['pending'] ?? []) /count($records) * 100 ,1); @endphp
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>

                    <div class="text-rose-900 px-2 w-30 font-bold ml-4">Registrados</div>
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{count($groups['registered'] ?? [])}}</div>
                    @php $porcentaje = round( count($groups['registered'] ?? []) /count($records) * 100 ,1); @endphp
                    <div class="rounded border-rose-800 border p-2 text-sm w-20 text-center mx-1">{{ $porcentaje }} %</div>

                </div>
            @endforeach

        </div>

    </div>

</div>
