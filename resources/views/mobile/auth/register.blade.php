@extends('mobile.layouts.app')
@section('usercontent')
    <div class="w-full min-h-screen SignupBackgroundImage bg-no-repeat bg-cover bg-center flex md:block flex-col">
        <div class="sm:hidden">
            <img src="{{ asset('BhandaraKaro/NewHome/public/img/signup1.webp') }}" class="w-full h-full" alt="" />
        </div>

        <div class="grow relative sm:static">
            <!-- content -->
            <div class="min-h-full md:w-fits bg-[#F3EFEF] absolute md:w-[29rem] top-[-12%] left-0 w-full md:left-1/2 md:top-[55%] md:-translate-x-1/2 md:-translate-y-1/2 lg:left-[10%] lg:translate-x-0 bottom-0 md:min-h-0 md:h-fit rounded-t-[3.6rem] md:rounded-[24px] animate-left-box"
                style="background-color: hsla(0, 0%, 100%, 0.7);">
                <div
                    class="min-h-full pt-[4rem] md:pt-[5rem] pb-[2rem] relative md:px-[3rem] bg-[#F3EFEF] rounded-t-[3.6rem] md:rounded-[24px]">
                    <a href="{{ url('/') }}"><img
                            class="w-[220px] md:w-[260px] h-[100px]s rounded-[30px] absolute top-[-21%] md:top-[-22%] left-1/2 translate-y-1/2 -translate-x-1/2"
                            src="{{ asset('BhandaraKaro/images/376x156.png') }}" alt="logoImage"
                            style="background-color: hsla(0, 0%, 100%, 0.7);" /></a>

                    <div class="h-full w-[80%] md:w-[100%] mx-auto">
                        <div class="font-SulphurPoint text-center mb-[1.3rem]">
                            <h3 class="font-bold text-[28px] md:text-3xl lg:text-4xl text-[#2D2D2D]">
                                Sign Up
                            </h3>
                            <p class="font-normal text-base lg:text-lg text-[#989898]">
                                Create a new account
                            </p>
                        </div>

                        <div>
                            <form method="POST" action="{{ route('user.register.create') }}">
                                @csrf
                                <!-- toggle button -->

                                <div class="flex justify-between mb-[1rem]">
                                    <h4
                                        class="font-SulphurPoint font-bold text-xl md:text-[22px] lg:text-2xl text-[#2D2D2D]">
                                        I am an Vendor
                                    </h4>

                                    <label class="toggle-container">
                                        <input type="checkbox" checked="true" class="toggle-input" />
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>


                                <!-- Flex container for two columns -->
                                <div class="flex justify-between flex-wrap mb-[1rem]">
                                    <!-- Column 1: Name -->
                                    <div class="w-full md:w-[calc(50%-0.5rem)] mb-[1rem] md:mb-0">
                                        <div
                                            class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                            <span>
                                                <CiMobile3 class="text-2xl text-[#989898]" />
                                            </span>
                                            <input id="name" type="text"
                                                class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none w-full @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                                placeholder="Name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Column 2: Phone Number -->
                                    <div class="w-full md:w-[calc(50%-0.5rem)]">
                                        <div
                                            class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                            <span>
                                                <CiMobile3 class="text-2xl text-[#989898]" />
                                            </span>
                                            <input id="phone_number" type="tel"
                                                class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none w-full @error('phone_number') is-invalid @enderror"
                                                name="phone_number" value="{{ old('phone_number') }}" placeholder="Mobile"
                                                required>
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Flex container for two columns -->
                                <div class="flex justify-between flex-wrap mb-[1rem]">
                                    <!-- Column 1: Password -->
                                    <div class="w-full md:w-[calc(50%-0.5rem)] mb-[1rem] md:mb-0">
                                        <!-- Password  -->
                                        <div
                                            class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                            <span>
                                                <CiMobile3 class="text-2xl text-[#989898]" />
                                            </span>
                                            <input id="password" type="password"
                                                class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none w-full @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="w-full md:w-[calc(50%-0.5rem)]">
                                        <!-- Confirm Password  -->
                                        <div
                                            class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                            <span>
                                                <CiMobile3 class="text-2xl text-[#989898]" />
                                            </span>
                                            {{--  --}}
                                            <input id="password-confirm" type="password"
                                                class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none w-full"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Re-Confirm">
                                        </div>
                                    </div>
                                </div>


                                <!-- get OTP box  -->
                                <div onclick="{getOtP()}"
                                    class="bg-[#dc375d] py-3 md:py-[14px] rounded-[12px] shadow-GetOTPBtn cursor-pointer">
                                    <h3
                                        class="font-Roboto font-bold text-lg md:text-xl lg:text-[22px] text-[#FFFFFF] text-center">
                                        <button type="submit">
                                            Get OTP
                                        </button>
                                    </h3>
                                </div>
                            </form>


                            <!-- or options  -->
                            <div class="my-[1.2rem] flex items-center justify-center">
                                <div class="w-full relative">
                                    <div class="absolute w-full top-[50%] border-[1px] border-[#00000040]"></div>
                                </div>
                                <p class="font-inter font-medium text-[13px] text-[#989898] mx-2">
                                    or
                                </p>
                                <div class="w-full relative">
                                    <div class="absolute w-full top-[50%] border-[1px] border-[#00000040]"></div>
                                </div>
                            </div>

                            <!-- {/* social icons */} -->
                            <div class="flex items-center justify-center gap-6 my-3">
                                <div>
                                    <img class="w-[25px] h-[25px] sm:w-[25px] sm:h-[25px] md:w-[40px] md:h-[40px]"
                                        src="{{ asset('BhandaraKaro/NewHome/public/img/Facebook.png') }}" alt="" />
                                </div>
                                <div>
                                    <img class="w-[25px] h-[25px] sm:w-[25px] sm:h-[25px] md:w-[40px] md:h-[40px]"
                                        src="{{ asset('BhandaraKaro/NewHome/public/img/Google.png') }}" alt="" />
                                </div>
                                <div>
                                    <img class="w-[25px] h-[25px] sm:w-[25px] sm:h-[25px] md:w-[40px] md:h-[40px]"
                                        src="{{ asset('BhandaraKaro/NewHome/public/img/LinkedIn.png') }}" alt="" />
                                </div>
                            </div>

                            <!-- don't have an account sign up here -->
                            <div class="">
                                <h5 class="text-sm xs:text-[15px] sm:text-lg lg:text-[22px] text-center">
                                    <span class="font-SulphurPoint font-bold text-[#00000052]">Already have an account?
                                    </span>
                                    <a href="{{ route('user.login') }}" class="font-Inter font-medium text-[#A21D3C]">
                                        Login.
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    const getOtP = () => {
        window.location.href = {{ route('user.verify') }};
    };
</script>
