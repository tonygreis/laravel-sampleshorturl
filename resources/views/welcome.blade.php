@extends('layouts.app')
@section('meta')
    <title>Shorten url</title>
@section('content')
    <div class="container mx-auto">
        <div class="flex">
            @if (Session::has('global'))
                <copy-url url="{{ Session::get('global') }}"></copy-url>
            @endif
        </div>
        <div class="flex p-2">
            <div class="w-full">
                <form action="{{ route('url.generate') }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full p-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Titulli
                            </label>
                            @if ($errors->has('title'))
                                <div class="p-2 text-red-500">{{ $errors->first('title') }}</div>
                            @endif
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="title"
                                name="title"
                                type="text"
                                placeholder="Titulli">
                        </div>
                        <div class="w-full p-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Url
                            </label>
                            @if ($errors->has('url'))
                                <div class="p-2 text-red-500">{{ $errors->first('url') }}</div>
                            @endif
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="url"
                                name="url"
                                type="url"
                                placeholder="Url">
                        </div>
                    </div>
                    <div class="flex justify-around">
                        <button type="submit" class="py-2 px-6 bg-blue-500 hover:bg-blue-100 font-bold shadow-lg rounded-lg">Short</button>
                    </div>
                </form>
            </div>
        </div>
        <section class="py-12 px-4 text-center">
            <div class="w-full max-w-2xl mx-auto"><span class="text-sm font-semibold">TAGLINE</span>
                <h2 class="text-5xl mt-2 mb-6 leading-tight font-heading">No paper plane can be made without paper</h2>
                <p class="mb-8 text-gray-500 leading-relaxed">Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That’s us - people who sell limitless paper in the paperless world.</p>
                <div><a class="inline-block py-4 px-8 mr-6 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Sign up</a><a class="text-blue-700 hover:underline" href="#">Learn more</a></div>
            </div>
        </section>
        <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-4 -mb-6">
                <div class="lg:w-1/3 px-4 mb-6"><img src="{{ asset('placeholders/icons/shield.svg') }}" alt="">
                    <h3 class="text-xl my-2 font-heading">High durability</h3>
                    <p class="text-gray-500 leading-relaxed">Forget about paper jams with our increased stability product. Ideal for high-quality printing, colour printing and photocopying.</p>
                </div>
                <div class="lg:w-1/3 px-4 mb-6"><img src="{{ asset('placeholders/icons/cloud-tools.svg') }}" alt="">
                    <h3 class="text-xl my-2 font-heading">Versatility</h3>
                    <p class="text-gray-500 leading-relaxed">Multi-functional paper for various office needs. Snow-white sheets will shine bright like diamond for many years.</p>
                </div>
                <div class="lg:w-1/3 px-4 mb-6"><img src="{{ asset('placeholders/icons/cart.svg') }}" alt="">
                    <h3 class="text-xl my-2 font-heading">Value-based price</h3>
                    <p class="text-gray-500 leading-relaxed">The best combination of quality and economy comes with Dunder Mifflin paper. The offer includes paper in wide range of density and sizes.</p>
                </div>
            </div>
        </section>
        <section class="p-4">
            <div class="flex flex-wrap -mx-8">
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{ asset('placeholders/logos/realweb.svg') }}" alt=""></div>
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{ asset('placeholders/logos/gitscape.svg') }}" alt=""></div>
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{ asset('placeholders/logos/k-hole.svg') }}" alt=""></div>
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{asset('placeholders/logos/plucky.svg')}}" alt=""></div>
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{ asset('placeholders/logos/1stsight.svg') }}" alt=""></div>
                <div class="w-1/2 md:w-1/6 px-8 mb-4 md:mb-0"><img src="{{ asset('placeholders/logos/tholio.svg') }}" alt=""></div>
            </div>
        </section>
        <section class="py-12 px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <div class="flex flex-col h-full p-8 bg-gray-200 rounded">
                        <h2 class="text-3xl font-heading">Dunder Friends, a.k.a Companies Who Work With Us</h2>
                        <p class="max-w-sm mt-auto mb-8 text-gray-500 leading-relaxed">We don’t believe in paperless future - so do our Customers.</p><a class="text-right text-blue-700 hover:underline" href="#">View all Dunder Mifflin customers</a>
                    </div>
                </div>
                <div class="lg:w-1/2 px-4">
                    <div class="flex flex-wrap -m-2">
                        <div class="w-1/2 p-2"><img class="rounded shadow-md" src="{{ asset('placeholders/pictures/office.jpg') }}" alt=""></div>
                        <div class="w-1/2 p-2"><img class="rounded shadow-md" src="{{ asset('placeholders/pictures/work.jpg') }}" alt=""></div>
                        <div class="w-1/2 p-2"><img class="rounded shadow-md" src="{{ asset('placeholders/pictures/work.jpg') }}" alt=""></div>
                        <div class="w-1/2 p-2"><img class="rounded shadow-md" src="{{ asset('placeholders/pictures/office.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-8 px-4 pb-4">
            <h2 class="text-4xl mb-2 leading-tight font-heading">Dunder Mifflin Family</h2>
            <p class="max-w-xl mb-8 text-gray-500">Because no great company could exist without accountants, sellers, stock workers, and of course - paper.</p>
            <div class="flex flex-wrap -mx-4 text-center">
                <div class="w-full lg:w-1/3 px-4 mb-8">
                    <div class="h-full pb-6 rounded shadow-md"><img class="mx-auto mb-4" src="{{ asset('placeholders/pictures/female_avatar.svg') }}" alt="">
                        <div class="px-8">
                            <h3 class="text-xl font-heading font-semibold">Karen Filippelli</h3><span>Regional Manager at Utica branch</span>
                            <div class="flex justify-center py-3 my-4 mx-12 border-t border-b"><img class="w-8 h-8 mx-3" src="{{ asset('placeholders/icons/message.svg') }}" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/share.svg" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/star.svg" alt=""></div>
                            <p>Started as a Sales representative at Stamford branch, moved to Scranton.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8">
                    <div class="h-full pb-6 rounded shadow-md"><img class="mx-auto mb-4" src="{{ asset('placeholders/pictures/male_avatar.svg') }}" alt="">
                        <div class="px-8">
                            <h3 class="text-xl font-heading font-semibold">Darryl Philbin</h3><span>Marketing Director</span>
                            <div class="flex justify-center py-3 my-4 mx-12 border-t border-b"><img class="w-8 h-8 mx-3" src="{{ asset('placeholders/icons/message.svg') }}" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/share.svg" alt=""><img class="w-8 h-8 mx-3" src="placeholders/icons/star.svg" alt=""></div>
                            <p>I started there as an Assistant and finally got a promotion to the Marketing Director.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 mb-8">
                    <div class="h-full pb-6 rounded shadow-md"><img class="mx-auto mb-4" src="{{ asset('placeholders/pictures/female_avatar.svg') }}" alt="">
                        <div class="px-8">
                            <h3 class="text-xl font-heading font-semibold">Kelly Kapoor</h3><span>Customer Service</span>
                            <div class="flex justify-center py-3 my-4 mx-12 border-t border-b"><img class="w-8 h-8 mx-3" src="{{ asset('placeholders/icons/message.svg') }}" alt=""><img class="w-8 h-8 mx-3" src="{{ asset('placeholders/icons/share.svg') }}" alt=""><img class="w-8 h-8 mx-3" src="{{ asset('placeholders/icons/star.svg') }}" alt=""></div>
                            <p>I work for Dunder Mifflin for a few years now. I learned a lot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8 px-4">
            <div class="flex flex-wrap -mx-8 text-center">
                <div class="w-full md:w-1/2 p-8 mb-4 md:mb-0">
                    <h3 class="text-5xl font-heading">$9 / mo</h3>
                    <p class="flex-grow mt-4 mb-6 text-gray-500 leading-relaxed">Just enough paper for small business. Not enough to waste it on fluffy animals photos. The best quality and economy comes with Dunder Mifflin paper.</p><a class="inline-block py-4 px-8 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Contact sales</a>
                </div>
                <div class="w-full md:w-1/2 p-8 mb-4 md:mb-0 md:border-l">
                    <h3 class="text-5xl font-heading">$49 / mo</h3>
                    <p class="mt-4 mb-6 text-gray-500 leading-relaxed">That’s what we’re talking about! More reams of paper is a really reamful choice. The best combination of quality and economy comes with Dunder Mifflin paper.</p><a class="inline-block py-4 px-8 leading-none text-blue-700 bg-indigo-100 hover:bg-indigo-200 rounded shadow" href="#">Contact sales</a>
                </div>
            </div>
        </section>
        <section class="py-12 px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl text-center mb-4 font-heading">Frequently Asked Questions</h2>
                <div class="p-4 mb-2 border-b">
                    <button class="flex w-full text-left"><span class="flex-grow font-semibold">How does Dunder Mifflin paper differ from other products?</span><img class="w-12" src="{{ asset('placeholders/icons/angle-bottom.svg') }}" alt=""></button>
                    <p class="mt-1">Paper produced with love, devotion, passion - is not the same paper. Our supplies are extra strong, and you’re going to need the paper-tear up-master to destroy just one sheet. It’s also suited for every available printer.</p>
                </div>
                <div class="p-4 mb-2 border-b">
                    <button class="flex w-full text-left"><span class="flex-grow font-semibold">Why choose Dunder Mifflin instead of some huge paper producer?</span><img class="w-12" src="{{asset('placeholders/icons/angle-bottom.svg')}}" alt=""></button>
                    <p class="hidden mt-1">You know that feeling when you are waiting on the phone for hours to contact your supplier? Sometimes they even have a waiting time music prepared for that. In Dunder Mifflin, you can get help immediately, and each of our customers receives an individual assistant. For us, companies are people - not numbers, so we take care of each of them.</p>
                </div>
                <div class="p-4 mb-2 border-b">
                    <button class="flex w-full text-left"><span class="flex-grow font-semibold">When I will receive the products?</span><img class="w-12" src="{{ asset('placeholders/icons/angle-bottom.svg') }}" alt=""></button>
                    <p class="hidden mt-1">If you buy one of our business plans, you will receive the supplies every first Monday of the month. However, you can also purchase paper separately. Our employees will make sure that you will receive the products in the next business days.</p>
                </div>
                <div class="p-4 mb-2 border-b">
                    <button class="flex w-full text-left"><span class="flex-grow font-semibold">How long does it take to finalize the deal?</span><img class="w-12" src="{{ asset('placeholders/icons/angle-bottom.svg') }}" alt=""></button>
                    <p class="hidden mt-1">The whole process depends on your decision. If you sign the contract immediately, we can start official cooperation in the next two business days.</p>
                </div>
            </div>
        </section>
        <section class="py-12 px-4">
            <h2 class="text-3xl mb-8 text-center font-heading">Contact the Scranton team</h2>
            <div class="w-full max-w-2xl mx-auto mb-8">
                <form>
                    <div class="flex mb-4 -mx-2">
                        <div class="w-1/2 px-2">
                            <input class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" type="email" placeholder="Name">
                        </div>
                        <div class="w-1/2 px-2">
                            <input class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-4">
                        <textarea class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" type="password" placeholder="Write something..." rows="5"></textarea>
                    </div>
                    <div>
                        <button class="inline-block w-full py-4 px-8 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow">Submit</button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <p class="mb-2">Or just email us on</p><a class="text-blue-700 hover:underline" href="#">scranton@dundermifflin.com</a>
            </div>
        </section>
        <footer class="flex flex-wrap items-center justify-between p-4">
            <div class="w-full lg:w-auto lg:mr-6 mb-4 lg:mb-0 text-center">&copy 2019 Dunder Mifflin</div>
            <div class="flex flex-col lg:flex-row items-center w-full lg:w-auto">
                <div class="mx-auto lg:mx-0 lg:ml-auto"><a class="inline-block mt-0 text-blue-900 hover:text-blue-700" href="#">Products</a><a class="inline-block mt-0 ml-8 text-blue-900 hover:text-blue-700" href="#">Team</a><a class="inline-block mt-0 ml-8 text-blue-900 hover:text-blue-700" href="#">Customers</a></div>
                <div class="flex justify-center mt-4 lg:mt-0 lg:ml-8"><img class="w-6 h-6 mr-6" src="{{ asset('placeholders/icons/message.svg') }}" alt=""><img class="w-6 h-6" src="{{ asset('placeholders/icons/share.svg') }}" alt=""></div>
            </div>
        </footer>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
