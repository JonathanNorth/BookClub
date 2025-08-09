<table class="table-auto border-2 border-separate rounded-t-xl border-green-700 border-spacing-0 overflow-hidden">
    <caption class="fontbold text-4xl pb-2">{{__('Round Details')}}</caption>
    <thead class="bg-green-800">
        <tr>
            <th class="px-2 py-1">{{__('Genre')}}</th>
            <th class="px-2 py-1">{{__('Winning Suggestion')}}</th>
            <th class="px-2 py-1">{{__('Due Date')}}</th>
        </tr>
    </thead>   
    <tbody>                     
        <tr class="odd:bg-slate-700 even:bg-slate-600 hover:bg-gray-500">
            @if($myRound->winningSuggestion)
                <td class="px-2 py-1">{{ ucwords($myRound->genre, "-") }}</td>
                <td class="px-2 py-1">{{ ucwords($myRound->winningSuggestion->book->title) }}</td>
                <td class="px-2 py-1">{{$myRound->pick_date}}</td>
            @else
                No winner selected
            @endif
        </tr>
    </tbody>  
</table>
