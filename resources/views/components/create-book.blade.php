
<form method="POST" action="{{ route('add.book')}}" class="flex flex-col border-green-900 bg-green-800 gap-1 p-4 w-fit rounded-lg">
   <div class="font-black text-xl align-middle">{{__('Add Book')}}</div>
   @csrf
   <div class="flex gap-2 items-center">
      <label for="title" class="w-40">Title:</label>
      <input name="title"  type="text" class="w-40 bg-black" required>
   </div>
   <div class="flex gap-2 items-center">
      <label for="author" class="w-40">Author:</label>
      <input name="author" type="text" class="w-40 bg-black" required>
   </div>
   <div class="flex gap-2 items-center">
      <label for="genre"  class="w-40">Genre:</label>
      <select name="genre" class="w-40 bg-black" required>
         <option value="non-fiction">Non Fiction</option>
         <option value="fiction">Fiction</option>
      </select>
   </div>
   <div class="flex gap-2 items-center">
      <label for="ISBN" class="w-40">ISBN:</label>
      <input name="ISBN" type="text" class="w-40 bg-black" required>
   </div>
   <div class="flex gap-2 items-center">
      <label for="goodreads_link" class="w-40">GoodReads Link</label>
      <input name="goodreads_link" type="url" class="w-40 bg-black" required>
   </div>
      <button type="submit" class="mt-2 bg-green-950 p-3 rounded-md hover:bg-green-800">Create round</button>
</form>