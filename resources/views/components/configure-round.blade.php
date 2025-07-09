    <form method="POST" action="{{ route('round.store')}}" class="flex flex-col items-start border-4 border-green-900 bg-green-800 gap-1 p-4 w-fit rounded-lg ">
        <div class="font-black text-xl align-middle">{{__('Configure New Round')}}</div>
        @csrf
        <div class="flex gap-2 items-center">
            <label for="judge" class="w-20">Judge:</label>
            <select name="judge_id" class="w-40 bg-black">
            @if(!empty($judges))
            @foreach ($judges as $judge)
                    <option value="{{ $judge->id}}">{{ $judge->name}}</option>
                @endforeach
            @endif()
            </select>
        </div>
        <div class="flex gap-2 items-center">
            <label for="genre" class="w-20">Genre:</label>
            <select name="genre" class="w-40 bg-black" >
                <option value="non-fiction">{{ __('Non Fiction')}}</option>
                <option value="fiction">{{ __('Fiction')}}</option>
            </select>  
        </div>
        <div class="flex gap-2 items-center">
            <label for="pick_date" class="w-20">Pick Date</label>
            <input type="date" name ="pick_date" class="w-40 bg-black">
        </div>
        <button type="submit" class="mt-2 bg-green-950 p-3 rounded-md hover:bg-green-800">Create round</button>
        </form>
</div>