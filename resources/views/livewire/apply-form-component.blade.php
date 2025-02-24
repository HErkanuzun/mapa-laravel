<div>
    
    <!-- Button to open modal --><!-- HTML !-->
        <button data-w-id="0114b172-b1b4-16f2-204b-21aeddbe5e33" type="button" class="button-80" role="button" wire:click="$set('showModal', true)">Basvuru Formu</button>
    <!-- Modal -->
    @if($showModal)
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"  class="z-[50999] flex items-center justify-center bg-gray-900 bg-opacity-50 fixed top-0 left-0 right-0 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full modal-container">
            <div class="relative w-full max-w-md max-h-full modal-content-container">
                <!-- Modal content -->
                <div class="modal-content relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" wire:click="$set('showModal', false)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 111.414 1.414L11.414 10l4.293 4.293a1 1 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 01-1.414-1.414L8.586 10 4.293 5.707a1 1 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Başvuru Formu</h3>
                        <form class="space-y-6" wire:submit.prevent="submit">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adınız ve Soyadınız?</label>
                                <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email?</label>
                                <input type="email" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="experience" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">İş tecrübeniz kaç yıl?</label>
                                <input type="number" id="experience" wire:model="experience" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hangi sektörde çalışıyorsunuz?</label>
                                <input type="text" id="sector" wire:model="sector" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="infoSource" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mapa hakkında bilgiye nereden ulaştın?</label>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="infoSource1" wire:model="infoSource" type="radio" value="Internet" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="infoSource1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">İnternetten öğrendim</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="infoSource2" wire:model="infoSource" type="radio" value="Friends" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="infoSource2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bir arkadaşım önerdi</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="infoSource3" wire:model="infoSource" type="radio" value="Advertising" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="infoSource3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reklamda gördüm</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="infoSource4" wire:model="infoSource" type="radio" value="Other" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="infoSource4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Listede bulunmuyor</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="interestReason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bu siteye olan ilginizin sebeplerini açıklar mısınız?</label>
                                <input type="text" id="interestReason" wire:model="interestReason" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="hindrance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bize katılmanızı engelleyebilecek herhangi bir durum veya engel var mı?</label>
                                <input type="text" id="hindrance" wire:model="hindrance" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
