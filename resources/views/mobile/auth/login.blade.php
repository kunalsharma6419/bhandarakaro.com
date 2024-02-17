@extends('mobile.layouts.app')
@section('usercontent')
    <div class="w-full min-h-screen LoginBackgroundImage bg-no-repeat bg-cover bg-center flex md:block flex-col">
        <div class="sm:hidden">
            <img src="{{ asset('BhandaraKaro/NewHome/public/img/trivandrum.webp') }}" class="w-full h-full" alt="" />
        </div>

        <div class="grow relative sm:static">
            <!-- content -->
            <div class="min-h-full md:w-fits absolute md:w-[29rem] top-[-12%] right-0 w-full md:right-1/2 md:top-[55%] md:translate-x-1/2 md:-translate-y-1/2 lg:right-[10%] lg:translate-x-0 bottom-0 md:min-h-0 md:h-fit rounded-t-[3.6rem] md:rounded-[24px] animate-right-box"
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
                                Welcome back!
                            </h3>
                            <p class="font-normal text-base lg:text-lg text-[#989898]">
                                Login to your account
                            </p>
                        </div>

                        <div>
                            <!-- toggle button -->

                            {{-- <div class="flex justify-between mb-[1rem]">
                                <h4 class="font-SulphurPoint font-bold text-xl md:text-[22px] lg:text-2xl text-[#2D2D2D]">
                                    I am an Vendor
                                </h4>

                                <label class="toggle-container">
                                    <input type="checkbox" checked="true" class="toggle-input" />
                                    <span class="toggle-slider"></span>
                                </label>
                            </div> --}}

                            <form method="POST" action="{{ route('user.login.sendotp') }}">
                                @csrf
                                <!-- mobile number  -->
                                <div
                                    class="mb-[1rem] border-[1px] border-[#989898] bg-[#F3EFEF] rounded-[12px] flex items-center px-2 py-2 md:py-3 gap-3 shadow-MobileNoBox">
                                    <span>
                                        <CiMobile3 class="text-2xl text-[#989898]" />
                                    </span>
                                    <input type="tel"
                                        class="font-SulphurPoint font-bold text-lg md:text-xl lg:text-[22px] text-[#989898] bg-[#F3EFEF] outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none @error('phone_number') is-invalid @enderror"
                                        name="phone_number" value="{{ old('phone_number') }}" placeholder="Mobile Number"
                                        required autofocus />
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- get OTP box  -->
                                <div onclick="{getOtP()}"
                                    class="bg-[#dc375d] py-3 md:py-[14px] rounded-[12px] shadow-GetOTPBtn cursor-pointer">
                                    <h3
                                        class="font-Roboto font-bold text-lg md:text-xl lg:text-[22px] text-[#FFFFFF] text-center">
                                        <button type="submit">Get OTP</button>
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
                            {{-- <div class="flex items-center justify-center gap-6 my-3">
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
                            </div> --}}

                            <!-- don't have an account sign up here -->
                            <div class="">
                                <h5 class="text-sm xs:text-[15px] sm:text-lg lg:text-[22px] text-center">
                                    <span class="font-SulphurPoint font-bold text-[#989898]">Don’t have an account?
                                    </span>
                                    <a href="{{ route('user.register') }}" class="font-Inter font-medium text-[#A21D3C]">
                                        Sign Up.
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
        console.log("you click on get otp");
        const url = `/login/verifyotp/${user_phone}`;
        window.location.href = url;
    };

    const number = "";
    const addNumber = (val) => {
        number.append(val);
        console.log(val);
        console.log(number);
    };
</script>
