@extends('backend.layouts.app')
@section('content')
    <main class="bg-white-500 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        Road Map Form
                    </div>
                    <div class="p-3">
                        @if (session('SUCCESS'))
                            <div id="successMessage"
                                class="px-4 py-2 m-4 max-w-3xl mx-auto text-center text-gray-500 border border-green-600 bg-green-600">
                                {{ session('SUCCESS') }}
                            </div>
                        @endif

                        @if (session('ERROR'))
                            <div id="successMessage"
                                class="px-4 py-2 m-4 max-w-3xl mx-auto text-center text-white border border-red-600 bg-red-600">
                                {{ session('ERROR') }}
                            </div>
                        @endif
                        <form class="w-full" method="POST" action="{{route('roadmap.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-1/2 px-4">
                                    <div class="mt-1">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                            Name
                                        </label>
                                        <input
                                            class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                            name="name" type="text" placeholder="Please write here your name">
                                    </div>
                                    <div class="mt-1">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                            Year
                                        </label>
                                        <input
                                            class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                            name="year" type="number" placeholder="Please write here your year">
                                    </div>
                                    <div class="mt-1">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                            Title
                                        </label>
                                        <input
                                            class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                            name="title" type="text" placeholder="Please write here your title">
                                    </div>
                                    <div class="mt-1">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                            Discriptions
                                        </label>
                                        <textarea id="about" name="discription" rows="3"
                                            class="appearance-none block w-full  text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                            placeholder="Please write here your title"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Cover photo
                                        </label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="coin_img" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="my-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/Main-->
@endsection
