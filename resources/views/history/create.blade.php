<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="" method="post">
                        @csrf
                        <label for="user">Qarzdorni tanlang</label>
                        <select name="user_id" id="user" class="form-control">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}    {{$user->phone}}</option>
                                @endforeach
                        </select>
                        <label for="debt">Qarz summasini kiriting</label>
                        <input type="text" name="debt" class="form-control" id="debt">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


