@include('partials.header', ['title' => 'Student System Main   '])
@php
    $array = ['title' => 'Student System'];
@endphp
<x-nav :data="$array" />

<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
    </a>
</header>

<section class="mt-10 mx-5">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="pl-3 py-3 px-7">
                        first Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        age
                    </th>
                    <th scope="col">

                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">
                            {{ $student->first_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->last_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->age }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/student/{{ $student->id }}"
                                class="bg-sky-600 text-white px-4 py-1 rounded">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto max-w-lg pt-6 p-2">
            {{ $students->links() }}
        </div>
    </div>
</section>
@include('partials.footer')
