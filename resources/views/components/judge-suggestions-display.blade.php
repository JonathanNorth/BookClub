 @if(!$suggestions->isEmpty())    
 <table class="table-auto border-2 border-separate rounded-t-xl border-green-700 border-spacing-0 overflow-hidden">
    <caption class="fontbold text-4xl pb-2">{{__('Suggestions')}}</caption>
    <thead class="bg-green-800">
        <tr>
            <th class="px-2 py-1">{{__('Title')}}</th>
            <th class="px-2 py-1">{{__('Author')}}</th>
            <th class="px-2 py-1">{{__('GoodReads Link')}}</th>
            <th class="px-2 py-1">{{__('Set as Winner')}}</th>
        </tr>
    </thead>   
    <tbody>  
                     
       @foreach ($suggestions as $suggestion)
        <tr class="odd:bg-slate-700 even:bg-slate-600 hover:bg-gray-500">
            <td class="px-2 py-1">{{ ucwords($suggestion->title) }}</td>
            <td class="px-2 py-1">{{ ucwords($suggestion->author) }}</td>
            <td class="px-2 py-1">{{ ucwords($suggestion->GoodReadsLink) }}</td>
            <td class="px-2 py-1 m-1 border border-black bg-black rounded-full hover:bg-red-700 hover:font-white">
                <form method="POST" action="{{ route('round.updateWinningSuggestion', $myRound) }}">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="suggestion_id" value="{{ $suggestion->id}}">
                    <button type="submit">{{'Choose Winner'}}</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </tbody>  
</table>
@else
<h2> No suggestions</h2>
@endif
