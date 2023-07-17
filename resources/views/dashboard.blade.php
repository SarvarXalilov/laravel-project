<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->role->name == 'manager')
                        <h1 class="mb-5">Manager Applications</h1>
                        <!-- This is an example component -->

                        {{-- <div class='flex items-center justify-center min-h-screen'> --}}

                        @foreach ($applications as $application )
                        <div class="mt-5 rounded-xl border p-5 shadow-md w-9/12 bg-white">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                    </div>
                                    <div class="text-lg font-bold text-slate-700">{{$application->user->name}}</div>
                                </div>
                                <div class="flex items-center space-x-8">
                                    <button
                                        class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">#{{$application->id}}</button>
                                    <div class="text-xs text-neutral-500">{{$application->created_at}}</div>
                                </div>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="mb-3 text-xl font-bold">{{$application->subject}}</div>
                                <div class="text-sm text-neutral-600">{{$application->message}}</div>
                            </div>

                            <div>
                                <div class="flex items-center justify-between text-slate-500">
                                    {{$application->user->name}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{$applications->links()}}
                        {{-- </div> --}}
                    @else
                        {{-- <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'> --}}
                        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                            <div class='max-w-md mx-auto space-y-6'>
                                <form action="{{ route('applications.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="text-2xl font-bold ">Submit your application</h2>
                                    <hr class="my-6">
                                    <label class="uppercase text-sm font-bold opacity-70">Subject</label>
                                    <input name="subject" required type="text"
                                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                    <label class="uppercase text-sm font-bold opacity-70" for="">Message</label>
                                    <textarea required name="message"
                                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"></textarea>

                                    <label class="uppercase text-sm font-bold opacity-70">FIle upload</label>
                                    <input name="file" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded"
                                        type="file" name="" id="">
                                    <input type="submit" class="btn btn-primary" style="background-color: red;"
                                        value="Send">
                                </form>

                            </div>
                        </div>
                        {{-- </div> --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
