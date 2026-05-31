<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Catalog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">List of Courses</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Course Code
                                    </th>
                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Course Name
                                    </th>
                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Description
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($courses as $course)
                                    <tr class="hover:bg-gray-100">
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $course->course_code }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $course->course_name }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $course->description ?? 'No description available' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="border border-gray-300 px-4 py-3 text-center">
                                            No courses found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>