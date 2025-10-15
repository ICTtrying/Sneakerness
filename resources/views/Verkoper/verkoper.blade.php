{{-- Layout component: alles binnen <x-layouts.app> wordt in de layout geplaatst --}}
<x-layouts.app title="Verkoper" heading="Verkoper Pagina">

    {{-- Hoofdcontainer van de pagina --}}
    <div class="space-y-6">

        {{-- Introductietekst of uitleg --}}
        <p class="text-gray-700 dark:text-gray-200">
            Hier komt de verkoper informatie / promotiepagina.
        </p>

        {{-- Tabelcontainer met horizontale scroll voor kleine schermen --}}
        <div class="overflow-x-auto">

            {{-- Begin van de tabel --}}
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                {{-- Tabelkop --}}
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        {{-- Kolomkoppen met styling --}}
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Naam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Categorie</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Stand Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Dagen</th>
                    </tr>
                </thead>

                {{-- Tabelbody met rijen --}}
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                    {{-- Voorbeeld van één verkoper --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Sneaker King</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Sneakers</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">AA+</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">2 Dagen</td>
                    </tr>

                    {{-- Nog een voorbeeldrij --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Food Corner</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Eten & Drinken</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">A</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">1 Dag</td>
                    </tr>

                    {{-- Hier kunnen later dynamische rijen uit een database komen --}}
                    {{-- Bijvoorbeeld: @foreach($verkopers as $verkoper) ... @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>
