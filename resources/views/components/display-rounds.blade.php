<table class="table-auto border-2 border-separate rounded-t-xl border-green-700 border-spacing-0 overflow-hidden">
    <caption class="fontbold text-4xl pb-2">{{__('Rounds')}}</caption>
    <thead class="bg-green-800">
        <tr>
            <th class="px-2 py-1">{{__('Judge')}}</th>
            <th class="px-2 py-1">{{__('Genre')}}</th>
            <th class="px-2 py-1">{{__('Winning Suggestion')}}</th>
            <th class="px-2 py-1">{{__('Pick Date')}}</th>
        </tr>
    </thead>   
    <tbody>                     
        @if(!empty($rounds))
            @foreach ($rounds as $round)
            <tr class="odd:bg-slate-700 even:bg-slate-600 hover:bg-gray-500">
                <td class="px-2 py-1">{{ ucwords($round->judge->name), "-" }}</td>
                <td class="px-2 py-1">{{ ucwords($round->genre, "-") }}</td>
                @if(!$round->winningSuggestion)
                    <td class="px-2 py-1"></td>
                @else
                <td class="px-2 py-1">{{ ucwords($round->winningSuggestion->book->title) }}</td>
                @endif
                <td class="px-2 py-1">{{$round->pick_date}}</td>
            </tr>
            @endforeach
        @endif
    </tbody>  
</table>
