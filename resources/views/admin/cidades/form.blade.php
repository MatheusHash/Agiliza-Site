    <section class="bg-indigo-50 justify-center flex">

        <div style="width: 80vw;" class=" items-center">
            <form action="{{route("cidades.store")}}" method="POST">
                @csrf
                <div class="flex ">
                    <div class="p-2">
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome da cidade</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="nome" id="nome" class="w-8 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Ex.: São João Batista do Glória">
                        </div>
                    </div>
                    <div class="ml-3">
                        <x-button class="ml-3 p-2 mt-4 " type="submit">
                            {{ __('Cadastrar Cidade') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </section>
