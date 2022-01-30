@extends('backend.layouts.app')
@section('content')
    <main class="bg-white-500 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        Gastar Cart Form
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
                        <form class="w-full" method="POST" action="{{ route('gastar.store') }}">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-1/2 px-4">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                        Title
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        name="title" type="text" placeholder="Please write here your title">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1">
                                        Discriptions
                                    </label>
                                    <textarea name="discription" rows="3"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        placeholder="Please write here your discription"></textarea>
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
            <!--/Grid Form-->
        </div>
    </main>
    <!--/Main-->
@endsection
