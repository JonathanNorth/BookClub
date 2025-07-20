<table class="table-auto border-2 border-separate rounded-t-xl border-green-700 border-spacing-0 overflow-hidden">
    <caption class="fontbold text-4xl pb-2">{{__('Choose a Winner')}}</caption>
    <thead class="bg-green-800">
        <tr>
            <th class="px-2 py-1">{{__('Title')}}</th>
            <th class="px-2 py-1">{{__('Author')}}</th>
            <th class="px-2 py-1">{{__('Goodreads Link')}}</th>
        </tr>
    </thead>   
    <tbody>                     
       {{--@foreach ($rounds as $round)
        <tr class="odd:bg-slate-700 even:bg-slate-600 hover:bg-gray-500">
            <td class="px-2 py-1">{{ ucwords($round->judge->name), "-" }}</td>
            <td class="px-2 py-1">{{ ucwords($round->genre, "-") }}</td>
            <td class="px-2 py-1">{{ ucwords($round->winning_suggestion, "-") }}</td>
            <td class="px-2 py-1">{{$round->pick_date}}</td>
        </tr>
        @endforeach --}}
    </tbody>  
</table>
