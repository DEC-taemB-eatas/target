<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('体組成データ入力') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('common.errors')
                    <form class="mb-6" action="{{ route('body.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col mb-4">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest"
                                for="measure_at">測定日</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="date" name="measure_at"
                                id="date">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="weight">体重</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="number" step="0.1"
                                name="weight" id="weight">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest"
                                for="fat">体脂肪率</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="number" step="0.1"
                                name="fat" id="fat">
                        </div>
                        <div class="flex flex-col mb-4">
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="muscle">筋肉量</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="number" step="0.1"
                                name="muscle" id="muscle">
                        </div>
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            入力
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
