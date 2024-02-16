@extends('mobile.layouts.app')
@section('usercontent')
    <div class="w-full min-h-screen SignupOTPBackgroundImage bg-no-repeat bg-cover bg-center flex md:block flex-col">
        <div class="md:hidden">
            <img src="{{ asset('BhandaraKaro/NewHome/public/img/signup1.webp') }}" class="w-full h-full" alt="" />
        </div>

        <div class="grow relative md:static">
            <!-- content -->
            <div class="min-h-full md:w-fits bg-[#F3EFEF] absolute md:w-[29rem] top-[-12%] left-0 w-full md:left-1/2 md:top-[55%] md:-translate-x-1/2 md:-translate-y-1/2 lg:left-[10%] lg:translate-x-0 bottom-0 md:min-h-0 md:h-fit rounded-t-[3.6rem] md:rounded-[24px] animate-left-box"
                style="background-color: hsla(0, 0%, 100%, 0.7);">
                <div
                    class="min-h-full pt-[4rem] md:pt-[5rem] pb-[2rem] relative md:px-[3rem] bg-[#F3EFEF] rounded-t-[3.6rem] md:rounded-[24px]">
                    <a href="./index.html"><img
                            class="w-[220px] md:w-[260px] h-[100px]s rounded-[30px] absolute top-[-21%] md:top-[-22%] left-1/2 translate-y-1/2 -translate-x-1/2"
                            src="{{ asset('BhandaraKaro/images/376x156.png') }}" alt="logoImage"
                            style="background-color: hsla(0, 0%, 100%, 0.7);" /></a>

                    <!-- {/* content is here */} -->
                    <div class="h-full w-[83%] md:w-[100%] mx-auto">
                        <div class="font-SulphurPoint text-center mb-[1.3rem]">
                            <h3 class="font-bold text-[28px] md:text-3xl lg:text-4xl text-[#2D2D2D]">
                                One Time Password
                            </h3>
                            <p class="font-normal text-base lg:text-lg text-[#989898]">
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                Please enter the OTP sent to your number: {{ session('phone_number') }}
                            </p>
                        </div>

                        <div>
                            <form action="{{ route('user.verify.otp') }}" method="post">
                                @csrf
                                <input type="hidden" name="phone_number" value="{{ session('phone_number') }}">
                                <div
                                    class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                    <input id="verification_code" type="number"
                                        class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none @error('verification_code') is-invalid @enderror"
                                        name="verification_code" value="{{ old('verification_code') }}" required>
                                    @error('verification_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- get OTP box -->
                                <div class="bg-[#dc375d] py-3 md:py-[14px] rounded-[12px] shadow-GetOTPBtn cursor-pointer">
                                    <h3 class="font-Roboto font-bold text-base md:text-lg text-[#FFFFFF] text-center">
                                        <button type="submit">
                                            Submit OTP
                                        </button>
                                    </h3>
                                </div>
                            </form>


                            <!-- resend OTP box  -->
                            <div class="pt-3 font-SulphurPoint font-bold text-center cursor-pointer">
                                <p class="text-base md:text-xl lg:text-2xl text-[#dc375d]">
                                    Resend OTP
                                </p>
                            </div>

                            <!-- or options -->
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
                                    <span class="font-SulphurPoint font-bold text-[#989898]">Already Have an Account?
                                    </span>
                                    <a href="{{ route('user.login') }}" class="font-Inter font-medium text-[#dc375d]">
                                        Log In.
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
