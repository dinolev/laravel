{{-- @extends('tournaments.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Trenutno dostupni turniri</div>
                    <div class="card-body">
                        <a href="{{ url('/tournaments/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Dodaj novi
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>naziv</th>
                                        <th>lokacija</th>
                                        <th>Datum</th>
                                        <th>podloga</th>
                                        <th>dob</th>
                                        <th>dogadaji</th>
                                        <th>broj_mjesta</th>
                                        <th>prijavljeni natjecatelji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tournaments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->naziv }}</td>
                                        <td>{{ $item->lokacija }}</td>
                                        <td>{{ $item->datum_odrzavanja }}</td>
                                        <td>{{ $item->podloga }}</td>
                                        <td>{{ $item->dob }}</td>
                                        <td>{{ $item->dogadaji }}</td>
                                        <td>{{ $item->broj_mjesta }}</td>
                                        <td>{{ $item->prijavljeni_natjecatelji }}</td>

                                        <td>
                                            <a href="{{ url('/tournaments/' . $item->id) }}" title="pogledaj detalje"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detalji</button></a>
                                            <a href="{{ url('/tournaments/' . $item->id . '/edit') }}" title="uredi turnir"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Uredi</button></a>

                                            <form method="POST" action="{{ url('/tournaments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="izbrisi turnir" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Obrisi</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index stranica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table-responsive">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>naziv</th>
                                <th>lokacija</th>
                                <th>Datum</th>
                                <th>podloga</th>
                                <th>dob</th>
                                <th>dogadaji</th>
                                <th>broj_mjesta</th>
                                <th>prijavljeni natjecatelji</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tournaments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->naziv }}</td>
                                <td>{{ $item->lokacija }}</td>
                                <td>{{ $item->datum_odrzavanja }}</td>
                                <td>{{ $item->podloga }}</td>
                                <td>{{ $item->dob }}</td>
                                <td>{{ $item->dogadaji }}</td>
                                <td>{{ $item->broj_mjesta }}</td>
                                <td>{{ $item->prijavljeni_natjecatelji }}</td>

                                @if (Auth::user()->hasRole('admin'))
                                <td>
                                    <a href="{{ url('/tournaments/' . $item->id) }}" title="pogledaj detalje"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detalji</button></a>
                                    <a href="{{ url('/tournaments/' . $item->id . '/edit') }}" title="uredi turnir"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Uredi</button></a>

                                    <form method="POST" action="{{ url('/tournaments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="izbrisi turnir" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Obrisi</button>
                                    </form>
                                </td>
                                @endif

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- component -->
<!-- This is an example component -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

	<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">#</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">naziv</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">lokacija</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Datum</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">podloga</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">dob</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">dogadaji</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">broj_mjesta</th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">prijavljeni natjecatelji</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @foreach($tournaments as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 content-start">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white content-start">{{ $loop->iteration }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white content-start">{{ $item->naziv }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->lokacija }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->datum_odrzavanja }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->podloga }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->dob }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->dogadaji }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->broj_mjesta }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->prijavljeni_natjecatelji }}</td>
                                @if (Auth::user()->hasRole('admin'))
                                <td>
                                    <a href="{{ url('/tournaments/' . $item->id) }}" title="pogledaj detalje"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Detalji</button></a>
                                    <a href="{{ url('/tournaments/' . $item->id . '/edit') }}" title="uredi turnir"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Uredi</button></a>

                                    <form method="POST" action="{{ url('/tournaments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="izbrisi turnir" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Obrisi</button>
                                    </form>
                                </td>@endif
                            </tr>
                        @endforeach
                    </tbody>



</div>
</x-app-layout>
