@extends('layouts.app')

@section('body')

    <!-- IAM USING TAILWIND CSS TO STYLE THE TABLE. -->
    <table class="table-auto bg-blue-500 p-12">
        <thead>

            <!-- DEFINE ALL THE HEADINGS -->
            <tr class="text-lg">
                <th class="p-4 bg-blue-600 text-bold">id</th>
                <th class="p-4 bg-blue-600 text-bold">First Name</th>
                <th class="p-4 bg-blue-600 text-bold">Last Name</th>
                <th class="p-4 bg-blue-600 text-bold">Show</th>
                <th class="p-4 bg-blue-600 text-bold">Edit</th>
                <th class="p-4 bg-blue-600 text-bold">Destroy</th>
            </tr>
        </thead>
        <tbody>

            <!-- USE BLADE TO ITERATE OVER THE DATA YOU PASSED IN YOUR CONTROLLER -->
            <!-- IAM NOT SHOWING ALL THE DATA TO KEEP THE TABLE COMPACT. -->
            @foreach($persons as $person)
            <tr class="text-md p-4 border border-solid border-blue-600 border-1">
                <td class="truncate p-4">{{ $person->id }}</td>
                <td class="truncate p-4">{{ $person->first_name }}</td>
                <td class="truncate p-4">{{ $person->last_name }}</td>
                <!-- USING THE DETAILS BUTTON WE WILL AN OVERVIEW OF ALL THE DATA. -->
                <td class="truncate p-4">
                    <button class="bg-blue-300 px-4 py-2 rounded shadow-md"> details </button>
                </td>
                <td class="truncate p-4">
                    <button class="bg-blue-300 px-4 py-2 rounded shadow-md"> edit </button>
                </td>
                <td class="truncate p-4">
                    <button class="bg-blue-300 px-4 py-2 rounded shadow-md"> destroy </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- EEN ANDERE MANIER OM HET IETS DYNAMISCHER TE DOEN. -->

    <!-- <table class="table-auto bg-blue-500 p-12">
        <thead>
            <tr>
                @foreach($attributes as $attribute)
                <th class="p-4 bg-blue-600 text-bold">{{ $attribute }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
            <tr class="p-4">
                @foreach($attributes as $attribute)
                <td class="truncate py-4">{{ $person[$attribute] }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table> -->

@endsection