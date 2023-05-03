<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('history.create')}}" class="btn btn-success mb-1">Yangi qarzdor</a>
                  <table class="table table-hover">
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th>Qarzi</th>
                      </tr>
                      @foreach($users as $user)
                          <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->phone}}</td>
                              <td>{{$user->getRoleNames()}}</td>
                              <td>{{$user->debt->debt}}</td>
                          </tr>
                      @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


