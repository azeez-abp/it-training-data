@extends('dashboard')
@section('content')









<main class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">

        <div>
            <img class="mx-auto h-12 w-auto" src="/images/logo/payment.png" alt="Your Company">
            <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-900">
                Welcome to Embrace Info-Tech Space</h2>
            <p class="mt-2 text-center text-sm text-gray-600">

                <a href="#" class="font-medium text-white hover:text-green-500">
                    Register for diverse IT training
                </a>
            </p>
        </div>



        <div class="-space-y-px rounded-md shadow-sm">


            <form action="{{ route('register.custom') }}" method="POST">
                @csrf
                @if($errors)
                @foreach($errors->all() as $message)
                <x-toast type='danger' title='Login Error' message='{{$message }}' className="top-left" />
                @endforeach
                @endif


                <div class="mb-8">

                    <input type="text" placeholder="Name" id="name" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="name" required autofocus value="{{old('name')}}" />

                    @if ($errors->has('name'))

                    <span class="text-red-400">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-8">
                    @php
                    $lists = ["O'Level","NCE","OND","ND","Undergraduate","Graduate" ];
                    @endphp
                    <select id="name" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="level_of_education" required>
                        @foreach($lists as $list)
                        <option>{{$list}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('level_of_eduction'))
                    <span class="text-red-400">{{ $errors->first('level_of_eduction') }}</span>
                    @endif
                </div>
                <div class="mb-8">
                    <input type="text" value="{{old('ward')}}" placeholder="Ward" id="ward" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="ward" required autofocus>
                    @if ($errors->has('ward'))
                    <span class="text-red-400">{{ $errors->first('ward') }}</span>
                    @endif
                </div>
                <div class="mb-8">
                    <input type="text" value="{{old('phone_number')}}" placeholder="Phone Number" id="phone_number" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="phone_number" required autofocus>
                    @if ($errors->has('phone_number'))
                    <span class="text-red-400">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>
                <div class="mb-8">
                    <input type="text" placeholder="Email" id="email_address" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" name="email" value="{{old('email')}}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-red-400">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-8">
                    <x-forms.input r="{{true}}" t="password" name="password" p="Password" id="pasword" className="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" children="
                             @if($errors->first('password'))
                             <x-toast type='danger' title='Password error' message='{{ $errors->first('password').' by toast' }}' /> 
                             @endif
                              " />
                </div>



                <div class="d-grid mx-auto">
                    <button type="submit" class="btn group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>
@endsection