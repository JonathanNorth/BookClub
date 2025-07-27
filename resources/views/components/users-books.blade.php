<table class="table-auto border-2 border-separate rounded-t-xl border-green-700 border-spacing-0 overflow-hidden">
    <caption class="fontbold text-4xl pb-2">{{'My Books'}}</caption>
    <thead class="bg-green-800">
        <tr>
            <th class="px-2 py-1">{{'Title'}}</th>
            <th class="px-2 py-1">{{'Author'}}</th>
            <th class="px-2 py-1">{{'Genre'}}</th>
            <th class="px-2 py-1">{{'Suggest'}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myBooks as $book)
            <tr class="odd:bg-slate-700 even:bg-slate-600 hover:bg-gray-500">
                <form method="POST" action="{{ route('store.suggestion')}}">
                    <td class="px-2 py-1">{{$book->title}}</td>
                    <td class="px-2 py-1">{{$book->author}}</td>
                    <td class="px-2 py-1">{{$book->genre}}</td>
                    <td class="px-2 py-1 m-1 border border-black bg-black rounded-full hover:bg-red-700 hover:font-white" type="submit"><button>{{'Submit'}}</button></td>
                </form>
            </tr>
        @endforeach  
    </tbody>
</table>
